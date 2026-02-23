<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\produit;
use App\Models\wishlist;

class wishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $user)
    {
        $userId = session('id');
        if ($userId) {
            $wishlistsByUser = DB::table('wishlists')
                ->join('produits', 'wishlists.produit_id', '=', 'produits.id')
                ->where('wishlists.user_id', $userId)
                ->get(['wishlists.*', 'produits.*']);
        } else {
            $wishlistIds = session('guest_wishlist', []);
            $wishlistsByUser = produit::whereIn('id', $wishlistIds)->get();
        }

        return view('components.wishlist', compact('wishlistsByUser'));
    }

    public function store(Request $request, $idProduct)
    {
        $produit = produit::findOrFail($idProduct);
        $userId = session('id');

        if ($userId) {
            wishlist::firstOrCreate([
                'produit_id' => $produit->id,
                'user_id' => $userId,
            ], [
                'price' => $produit->price,
                'status' => $produit->status
            ]);
        } else {
            $wishlistIds = session('guest_wishlist', []);
            if (!in_array($idProduct, $wishlistIds)) {
                $wishlistIds[] = $idProduct;
                session(['guest_wishlist' => $wishlistIds]);
            }
        }
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $userId = session('id');
        if ($userId) {
            $wishlist = Wishlist::where('produit_id', $id)
                ->where('user_id', $userId)
                ->firstOrFail();

            $wishlist->delete();
        } else {
            $wishlistIds = session('guest_wishlist', []);
            $wishlistIds = array_diff($wishlistIds, [$id]);
            session(['guest_wishlist' => $wishlistIds]);
        }

        return redirect()->back();
    }
}