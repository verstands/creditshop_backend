<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class notification_client extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
       'notif_id',
        'notif_recever',
        'notif_sender',
        'notif_message',
        'notif_date',
        'notif_vu_client',
        'etat_notif',
    ];
}
