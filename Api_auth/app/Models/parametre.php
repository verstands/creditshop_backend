<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class parametre extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'pt',
        'parametre_taux_echange',
        'parametre_pc_AchatCredit',
        'parametre_commission_agent',
        'parametre_commission_sts',
        'parametres_delai_paie',
        'parametres_echance_paie',
        'parametre_etat',
    ];
}
