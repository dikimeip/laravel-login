<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Login_Penggurus extends Authenticatable
{
    protected $table = 'penggurus';  
}
