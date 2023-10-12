<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class code_inscrip_pvc extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'ipvc',
        'code_vendeur',
        'code_agent',
        'code_code',
        'code_date',
        'code_etat',
    ];
}
