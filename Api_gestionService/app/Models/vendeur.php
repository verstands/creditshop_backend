<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class vendeur extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'vd',
        'vendeur_nom',
        'vendeur_prop1',
        'vendeur_prop2',
        'vendeur_prop3',
        'vendeur_tel',
        'vendeur_mdp',
        'vendeur_activite',
        'vendeur_nom_activ',
        'vendeur_solde',
        'vendeur_signature',
        'vendeur_parcelle',
        'vendeur_avenue',
        'vendeur_quartier',
        'vendeur_commune',
        'vendeur_ville',
        'vendeur_province',
        'vendeur_pays',
        'vendeur_activation',
        'vendeur_date',
        'vendeur_agent',
        'vendeur_etat',

    ];
}
