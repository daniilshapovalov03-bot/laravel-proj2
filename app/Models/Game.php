<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
 public function scopeStatus($query)
 {
 return $query->where('status', 'available');
 }
}

