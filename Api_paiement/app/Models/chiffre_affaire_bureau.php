<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class chiffre_affaire_bureau extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
       'chiffre_cab',
       'chiffre_etat',
    ];
}
