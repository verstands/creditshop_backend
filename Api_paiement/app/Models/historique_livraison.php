<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class historique_livraison extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'hl',
        'histo_livr_client',
        'histo_livr_agent',
        'histo_livr_clredit',
        'histo_livr_date',
        'histo_livr_vu',
        'histo_livr_etat',
    ];
}
