<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class article extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'articles_id',
        'article_nom',
        'article_marque',
        'article_image',
        'article_image2',
        'article_image3',
        'article_catheg1',
        'article_catheg2',
        'article_description',
        'article_prix',
        'article_stock',
        'article_etatt',
    ];
}
