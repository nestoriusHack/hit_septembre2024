<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomproduit',
        'descriptionproduit',
        'imageproduit',
        'documentproduit',
        'prixproduit'
    ];
     // Accessor pour formater le prix
     public function getPrixproduitAttribute($value)
    {
        return number_format($value, 2, ',', ' ') . ' FCFA';
    }
}
