<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersToken extends Model
{
    use HasFactory;

    protected $table = 'userstoken';
    public $timestamps = false;
}
