<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    protected $table="course";
    protected $fillable=[
        'courses',
        'sub_courses'
    ];
}
