<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentFeedbackModel extends Model
{
    protected $table="student_feedback";
    protected $fillable=[
        'contact_name',
        'department',
        'designation',
        'suggestions'
    ];
}
