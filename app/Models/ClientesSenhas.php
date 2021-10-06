<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesSenhas extends Model
{
    use HasFactory;
    protected $table = 'clientes_senhas';
    public $timestamps = false;
    protected $fillable = [
        'id_cliente',
        'sistema',
        'login',
        'senha',
    ];
}
