<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class paiement_commission extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'pc',
        'paiement_agent_site',
        'paiement_montant',
        'paiement_date',
        'paiement_agent_chef',
        'paiement_vu_admin',
        'paiement_etat',
    ];
}
