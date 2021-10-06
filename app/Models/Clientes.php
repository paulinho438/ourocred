<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'cpf',
        'dataNascimento',
        'beneficio',
        'especieBeneficio',
    ];
}
