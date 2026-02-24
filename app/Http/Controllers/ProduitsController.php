<?php

namespace App\Http\Controllers;
use App\Models\produit;
use App\Models\categorie;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = categorie::all();
        $query = produit::with('categorie_rel');

        if ($request->has('category')) {
            $categoryIds = is_array($request->category) ? $request->category : [$request->category];
            $query->whereIn('categorie_id', $categoryIds);
        }

        if ($request->has('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->has('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        if ($request->has('sortby')) {
            switch ($request->sortby) {
                case 'price-low':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price-high':
                    $query->orderBy('price', 'desc');
                    break;
                case 'date':
                    $query->orderBy('created_at', 'desc');
                    break;
            }
        }

        $produits = $query->paginate(12)->withQueryString();

        return view('components.products', compact('produits', 'categories'));
    }

    public function ProductsBycategorie($categorieName)
    {
        $categorie = categorie::where('type', $categorieName)->first();

        if (!$categorie) {
            return redirect()->route('products.index');
        }

        return redirect()->route('products.index', ['category' => $categorie->id]);
    }
    

    public function ProductsBysearch(Request $request)
    {
       $categories = categorie::all();

       $searchTerm = $request->input('search');
       $produits = produit::with('categorie_rel')
                           ->where('name', 'LIKE', '%'.$searchTerm.'%')
                           ->orWhere('utilisation', 'LIKE', '%'.$searchTerm.'%')
                           ->orWhere('description', 'LIKE', '%'.$searchTerm.'%')
                           ->orWhereHas('categorie_rel', function($query) use ($searchTerm) {
                               $query->where('type', 'LIKE', '%'.$searchTerm.'%');
                           })
                           ->paginate(20);

                           
        return view('components.products', compact('produits', 'categories'));

    }
    

    public function show(string $id)
    {
        $SingleProduit=produit::FindOrFail($id);
        return view('components.singleProduct',compact('SingleProduit'));
    }
}
