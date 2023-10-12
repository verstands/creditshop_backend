<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class chiffre_affaire_site extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'site_cas',
        'site_id_site',
        'site_montant_encais',
        'site_chiffre_generale',
        'site_etat',
    ];
}
