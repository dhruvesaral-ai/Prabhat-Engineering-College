<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultyModel extends Model
{
    protected $table="faculty_feedback";
    protected $fillable=[
        'contact_name',
        'department',
        'designation',
        'suggestions'
    ];
}
