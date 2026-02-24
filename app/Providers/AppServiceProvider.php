<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\CartController;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['partials.header', 'partials.headerMain'], function ($view) {
            $cartData = CartController::cart_view();
            $data = $cartData['CartsByUser'];
            $total = $cartData['totalPrice'];
            
            // Wishlist count
            $userId = session('id');
            if ($userId) {
                $wishlistCount = \App\Models\wishlist::where('user_id', $userId)->count();
                $compareCount = \App\Models\compare::where('user_id', $userId)->count();
            } else {
                $wishlistCount = count(session('guest_wishlist', []));
                $compareCount = count(session('guest_compare', []));
            }

            $categories = \App\Models\categorie::all();

            $view->with([
                'data' => $data, 
                'total' => $total,
                'wishlistCount' => $wishlistCount,
                'compareCount' => $compareCount,
                'categories' => $categories
            ]);
        });
    }
    
}
