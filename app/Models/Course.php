<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function class(){
        return $this->hasMany(Classes::class);
    }

    public function semester(){
        return $this->hasMany(Semester::class);
    }
}
