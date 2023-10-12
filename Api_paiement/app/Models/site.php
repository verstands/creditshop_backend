<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class site extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'st',
        'site_nom_site',
        'site_description_site',
        'site_quartier_site',
        'site_commune_site',
        'site_ville_site',
        'site_province_site',
        'site_pays_site',
        'site_recette_jour_site',
        'site_chiffre_affaire_site',
        'site_etat',
    ];
}
