<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class type_abonnement extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'ta',
        'type_ta',
        'etat_ta',
    ];
}
