<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;
use App\Models\compare;
use Illuminate\Support\Facades\DB;

class CompareController extends Controller
{
    public function index()
    {
        $userId = session('id');
        if ($userId) {
            $comparesByUser = DB::table('compares')
                ->join('produits', 'compares.produit_id', '=', 'produits.id')
                ->where('compares.user_id', $userId)
                ->get(['compares.*', 'produits.*']);
        } else {
            $compareIds = session('guest_compare', []);
            $comparesByUser = produit::whereIn('id', $compareIds)->get();
        }

        return view('components.compare', compact('comparesByUser'));
    }

    public function store(Request $request, $idProduct)
    {
        $userId = session('id');
        if ($userId) {
            compare::firstOrCreate([
                'produit_id' => $idProduct,
                'user_id' => $userId,
            ]);
        } else {
            $compareIds = session('guest_compare', []);
            if (!in_array($idProduct, $compareIds)) {
                $compareIds[] = $idProduct;
                session(['guest_compare' => $compareIds]);
            }
        }

        return redirect()->back();
    }

    public function destroy($idProduct)
    {
        $userId = session('id');
        if ($userId) {
            compare::where('produit_id', $idProduct)
                ->where('user_id', $userId)
                ->delete();
        } else {
            $compareIds = session('guest_compare', []);
            $compareIds = array_diff($compareIds, [$idProduct]);
            session(['guest_compare' => $compareIds]);
        }

        return redirect()->back();
    }
}
