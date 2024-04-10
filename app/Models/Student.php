<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //student model
    protected $table ='students';
    protected $primary ='id';
    protected $fillable =[
        'firstname',
        'lastname',
        'reg_number',
        'course',
        //'email',
        'password',
        
    ];


    use HasFactory;
}
