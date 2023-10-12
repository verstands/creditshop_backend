<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class article_a_credit extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'aac',
        'aac_id_credits',
        'aac_id_articles',
        'aac_nom_article',
        'aac_prix_article',
        'aac_livraison_art',
        'aac_etat_article',
    ];
}
