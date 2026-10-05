<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultyCareerModel extends Model
{
    protected $table ='faculty_career_form';

    protected $fillable = [
        'post_applied',
        'department',
        'full_name',
        'email',
        'experience',
        'highest_degree',
        'phone',
        'resume',
    ];
}
