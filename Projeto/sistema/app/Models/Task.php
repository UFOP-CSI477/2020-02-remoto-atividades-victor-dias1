<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'user_id'];

    // 1 task -> pertence a 1 usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
