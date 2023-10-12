<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class paiement_site_bureau extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'pb',
        'paiement_id_site',
        'paiement_id_chef_site',
        'paiement_montant',
        'paiement_date',
        'paiement_agent',
        'paiement_etat',
    ];
}
