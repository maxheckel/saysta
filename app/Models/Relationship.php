<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    use HasFactory;

    public function parent(){
        return $this->belongsTo(User::class, 'parent');
    }

    public function child(){
        return $this->belongsTo(User::class, 'child');
    }
}
