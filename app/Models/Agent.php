<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Agent extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'agent';
    protected $primaryKey = 'idAgent';

    protected $fillable = [
        'usernameAgent', 'emailAgent', 'passwordAgent'
    ];

    protected $hidden = [
        'passwordAgent', 'remember_token',
    ];
}