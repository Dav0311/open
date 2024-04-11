<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //courses table
    protected $table='courses';
    protected $primaryKey='id';
    protected $fillable = [
        'name',
        'courseunit',
        'duration'
    ];
    
    use HasFactory;
}
