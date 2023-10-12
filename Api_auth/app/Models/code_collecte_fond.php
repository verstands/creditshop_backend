<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class code_collecte_fond extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'ccf',
        'code_agent',
        'code_agent_chef',
        'code_date',
        'code_etat',
    ];
}
