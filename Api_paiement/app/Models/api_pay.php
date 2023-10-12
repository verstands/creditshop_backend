<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class api_pay extends Model
{use HasFactory, HasApiTokens;
    protected $fillable = [
        'phone',
        'reference',
        'date_pay',
        'status'
    ];
}
