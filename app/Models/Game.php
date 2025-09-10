<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'genre', 'status'];

    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }
}
