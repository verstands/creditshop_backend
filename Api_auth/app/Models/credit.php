<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class credit extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'credit_id',
        'credit_identifiant',
        'credit_client',
        'credit_agent',
        'credit_montant',
        'credit_acompte',
        'credit_active',
        'credit_termine',
        'credit_date_enreg',
        'credit_art_livre',
        'credit_date_livre',
        'credit_activ_livre',
        'credit_livraison_etat',
        'credit_livraison_dispo',
        'credit_agent_livre',
        'credit_date_vrais_livre',
        'credit_etat',
    ];
}
