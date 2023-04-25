<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sick extends Model
{
    use HasFactory;
    protected $fillable =['name','age','phone_number','illness_id','user_id','description'];
    public function illness(){
        return $this->belongsTo(illness::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function preview(){
        return $this->hasMany(preview::class);
    }
}
