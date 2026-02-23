<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\panier;
use App\Models\wishlist;
use App\Models\compare;
use Hash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CostumAuthController extends Controller
{
    public function Login(Request $request)
    {
        $request->validate([
            'signin-email' => 'required|email',
            'signin-password' => 'required',
        ]);

        $user = user::where('email', $request->input('signin-email'))->first();

        if ($user && Hash::check($request->input('signin-password'), $user->password)) {
            $request->session()->put('name', $user->name);
            $request->session()->put('email', $user->email);
            $request->session()->put('id', $user->id);

            $this->migrateGuestData($user->id);

            return redirect('/')->with('success', 'Logged in successfully!');
        }

        return redirect('/signin-modal')->with('error', 'Invalid email or password.');
    }

    private function migrateGuestData($userId)
    {
        // Migrate Cart
        $guestCart = session('guest_cart', []);
        foreach ($guestCart as $item) {
            panier::create([
                'produit_id' => $item['produit_id'],
                'user_id' => $userId,
                'PrixUnitaire' => $item['PrixUnitaire'],
                'totalPanier' => $item['totalPanier'],
                'Quantite' => $item['Quantite'],
            ]);
        }
        session()->forget('guest_cart');

        // Migrate Wishlist
        $guestWishlist = session('guest_wishlist', []);
        foreach ($guestWishlist as $productId) {
            wishlist::firstOrCreate([
                'produit_id' => $productId,
                'user_id' => $userId,
            ]);
        }
        session()->forget('guest_wishlist');

        // Migrate Compare
        $guestCompare = session('guest_compare', []);
        foreach ($guestCompare as $productId) {
            compare::firstOrCreate([
                'produit_id' => $productId,
                'user_id' => $userId,
            ]);
        }
        session()->forget('guest_compare');
    }

    public function Register(Request $request)
    {
        $request->validate([
            'register-name' => 'required',
            'register-email' => 'required|email|unique:users,email',
            'register-password' => 'required',
        ]);

        user::create([
            'name' => $request->input('register-name'),
            'email' => $request->input('register-email'),
            'password' => Hash::make($request->input('register-password')),
        ]);

        return redirect('/signin-modal')->with('message', 'Registration successful! Please sign in.');
    }

    public function LogOut()
    {
        Session::flush();
        return redirect('/signin-modal');
    }
}
