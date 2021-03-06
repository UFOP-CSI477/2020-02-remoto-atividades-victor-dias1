<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'um'];

    // 1 produto -> pertence a n compras
    public function compras()
    {
        return $this->hasMany(Compra::class);
    }
}
