<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    public function listItems(){
        return $this->hasMany(ListItem::class);
    }

    public function creator(){
        return $this->belongsTo(User::class);
    }
}
