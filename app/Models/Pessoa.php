<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'pessoas';
    protected $fillable = [
        'nome',
        'idade',
        'sexo',
        'contato',
        'endereco'
    ];
}
