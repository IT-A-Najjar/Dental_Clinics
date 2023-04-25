<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class illness extends Model
{
    use HasFactory;
    protected $fillable =['name'];
    public function Sicks(){
        return $this->hasMany(Sick::class);
    }
    public function preview(){
        return $this->hasMany(preview::class);
    }
}
