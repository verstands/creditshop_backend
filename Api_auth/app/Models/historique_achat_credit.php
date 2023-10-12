<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class historique_achat_credit extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'ha',
        'historique_client',
        'historique_vendeur',
        'historique_montant',
        'historique_date',
        'historique_etat',
    ];
}
