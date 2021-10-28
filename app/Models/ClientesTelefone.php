<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesTelefone extends Model
{
    use HasFactory;
    protected $table = 'clientes_telefone';
    public $timestamps = false;
    protected $fillable = [
        'id_cliente',
        'telefone',
        'tipo',
        'zap'
    ];
}
