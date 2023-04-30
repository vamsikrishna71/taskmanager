<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function scopeHasTasks($query){
        return $query->whereHas('tasks');
    }
}