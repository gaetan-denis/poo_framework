<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected  $table = 'courses';
    protected array $column = ['id', 'name', 'code'];




    public function getTeacher() : object
    {
        return $this->belongsTo(teacher::class);
    }
    public function getUsers() : object
    {
        return $this->belongsToMany(User::class, 'inscriptions');
    }
}
