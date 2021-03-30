<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nome',
        'cpf',
        'nascimento',
    ];

    public function disciplina()
    {
        return $this->hasMany(Disciplna::class);
    }
}
