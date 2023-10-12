<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class code_paiement_aac extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'paac',
        'code_client',
        'code_agent',
        'code_code',
        'code_date',
        'code_etat',
    ];
}
