<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    use HasFactory;
    protected $table = 'campanha';
    public $timestamps = false;
    protected $fillable = [
        'id_marketing',
        'nome_operador',
        'entregues',
        'atendidos',
        'dataCriacao',
        'dataFinalizacao',
        'status'
    ];
}
