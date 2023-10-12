<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class fidelite extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'fd',
        'client_fidelite',
        'client_fidelite',
        'etat_fidelite',
    ];
}
