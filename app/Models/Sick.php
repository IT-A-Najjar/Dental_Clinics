<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sick extends Model
{
    use HasFactory;
    public function illness(){
        return $this->belongsTo(illness::class);
    }
    public function doctor(){
        return $this->belongsTo(User::class);
    }
}
