<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categorie;
use App\Models\commande;
use App\Models\wishlist;

class produit extends Model
{
    use HasFactory;

    protected $fillable=['name','price','image','hoverImg','utilisation','description','description2','stock','status','oldPrice','categorie_id'];
//-----------------------------------------------------------
    public function Commandes(){
        return $this->belongsToMany(commande::class);

    }
// ------------------------------------------------------
    public function wishlists()
    {
        return $this->belongsToMany(wishlist::class);
    }

    public function categorie_rel()
    {
        return $this->belongsTo(categorie::class, 'categorie_id');
    }
}
