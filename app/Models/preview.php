<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preview extends Model
{
    protected $fillable =['sick_id','illness_id','description'];
    use HasFactory;
    public function illness(){
        return $this->belongsTo(illness::class);
    }
    public function sick(){
        return $this->belongsTo(Sick::class);
    }
}
