<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class type_article extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'ta',
        'nom_type_a',
        'image_type_a',
        'description_type_a',
        'etat_type_a',
    ];
}
