<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersPermissions extends Model
{
    use HasFactory;
    protected $table = 'users_permissions';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'slug'
    ];
}
