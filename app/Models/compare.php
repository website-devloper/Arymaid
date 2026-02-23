<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compare extends Model
{
    protected $fillable = ['produit_id', 'user_id'];
    use HasFactory;
}
