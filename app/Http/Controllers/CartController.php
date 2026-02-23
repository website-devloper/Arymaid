<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\panier;
use App\Models\produit;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $user)
    {
        $userId = session('id');
        if ($userId) {
            $CartsByUser = DB::table('paniers')
                ->join('produits', 'paniers.produit_id', '=', 'produits.id')
                ->where('paniers.user_id', $userId)
                ->get(['paniers.*', 'produits.*']);
        } else {
            $guestCart = session('guest_cart', []);
            $productIds = array_column($guestCart, 'produit_id');
            $products = produit::whereIn('id', $productIds)->get()->keyBy('id');

            $CartsByUser = collect($guestCart)->map(function ($item) use ($products) {
                $product = $products->get($item['produit_id']);
                if ($product) {
                    return (object) array_merge((array) $item, (array) $product->toArray());
                }
                return null;
            })->filter();
        }

        $total = $CartsByUser->sum('price');

        return view('components.cart', compact('CartsByUser', 'total'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public static function cart_view()
    {
        $userId = session('id');
        if ($userId) {
            $CartsByUser = DB::table('paniers')
                ->join('produits', 'paniers.produit_id', '=', 'produits.id')
                ->where('paniers.user_id', $userId)
                ->select('paniers.*', 'produits.*', 'produits.name')
                ->get();
        } else {
            $guestCart = session('guest_cart', []);
            $productIds = array_column($guestCart, 'produit_id');
            $products = produit::whereIn('id', $productIds)->get()->keyBy('id');

            $CartsByUser = collect($guestCart)->map(function ($item) use ($products) {
                $product = $products->get($item['produit_id']);
                if ($product) {
                    return (object) array_merge((array) $item, (array) $product->toArray());
                }
                return null;
            })->filter();
        }

        $totalPrice = $CartsByUser->sum('price');

        return ['CartsByUser' => $CartsByUser, 'totalPrice' => $totalPrice];
    }

    public function store(Request $request, $idProduct)
    {
        $produit = produit::findOrFail($idProduct);
        $userId = session('id');

        if ($userId) {
            panier::create([
                'produit_id' => $produit->id,
                'user_id' => $userId,
                'PrixUnitaire' => $produit->price,
                'totalPanier' => $produit->price,
                'Quantite' => 1, // Defaulting to 1 for simplicity
            ]);
        } else {
            $guestCart = session('guest_cart', []);
            $guestCart[] = [
                'produit_id' => $produit->id,
                'PrixUnitaire' => $produit->price,
                'totalPanier' => $produit->price,
                'Quantite' => 1,
            ];
            session(['guest_cart' => $guestCart]);
        }
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $userId = session('id');
        if ($userId) {
            $panier = panier::where('produit_id', $id)
                ->where('user_id', $userId)
                ->firstOrFail();

            $panier->delete();
        } else {
            $guestCart = session('guest_cart', []);
            $guestCart = array_filter($guestCart, function ($item) use ($id) {
                return $item['produit_id'] != $id;
            });
            session(['guest_cart' => $guestCart]);
        }

        return redirect()->back();
    }
}
