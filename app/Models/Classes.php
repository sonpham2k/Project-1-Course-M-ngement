<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function listRegisterd(){
        return $this->hasMany(ListRegisterd::class);
    }

    public function time(){
        return $this->hasMany(Time::class);
    }
}
