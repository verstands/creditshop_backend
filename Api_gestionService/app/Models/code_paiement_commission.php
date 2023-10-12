<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class code_paiement_commission extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'pcm',
        'code_agent',
        'code_agent_chef',
        'code_code',
        'code_date',
        'code_etat',
    ];
}
