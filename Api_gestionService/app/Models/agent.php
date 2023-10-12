<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class agent extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'ag',
        'agents_nom',
        'agents_postnom',
        'agents_prenom',
        'agents_sexe',
        'agents_serie',
        'agents_mdp',
        'agents_tel',
        'agents_adresse',
        'agents_site',
        'agents_commission',
        'agents_fonction',
        'agents_etat',
    ];
}
