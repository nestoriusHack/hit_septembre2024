<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preinscription extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'datenaissance',
        'nationalite',
        'adresse',
        'email',
        'telephone',
        'domaine',
        'niveau',
        'photo',
        'profile',
    ];
}
