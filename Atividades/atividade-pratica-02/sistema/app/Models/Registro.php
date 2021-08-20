<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'tipo'];

    // UM registro -> é de UM equipamento
    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class);
    }
}
