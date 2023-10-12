<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class paiement_credit extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'pc',
        'paiement_client',
        'paiement_montant',
        'paiement_date',
        'paiement_agent',
        'paiement_vu_chef',
        'paiement_etat',
    ];
}
