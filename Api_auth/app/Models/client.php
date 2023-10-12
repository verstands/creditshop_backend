<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class client extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'client_id',
        'client_nom',
        'client_post',
        'client_prenom',
        'client_profil',
        'client_carte',
        'client_adresse',
        'client_commune',
        'client_tel',
        'client_mdp',
        'client_activation',
        'client_agent_activa',
        'client_date_creation',
        'client_agent',
        'client_etat',
        'client_province',
    ];
}
