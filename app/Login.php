<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'login';

    // public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'telepon',
        'tanggal_lahir',
        'username',
        'password',
        'token',
        'level'
    ];
}
