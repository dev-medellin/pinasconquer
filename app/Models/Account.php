<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable
{
    use Notifiable;

    protected $table = 'accounts';

    public $timestamps = false;

    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'username',
        'Password',
        'email',
        'IP',
        // any other fields
    ];

    protected $hidden = ['Password', 'remember_token'];
}