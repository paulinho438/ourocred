<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesEndereco extends Model
{
    use HasFactory;
    protected $table = 'clientes_endereco';
    public $timestamps = false;
    protected $fillable = [
        'id_cliente',
        'endereco',
        'cidade',
        'uf',
        'cep',
        'bairro',
        'telefone',
        
    ];
}
