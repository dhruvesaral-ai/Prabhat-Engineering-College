<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineRegistrationModel extends Model
{
    protected $table="online_registrations";
    protected $fillable=[
        'courses',
        'contact_name',
        'contact_email',
        'contact_phone',
        'dob',
        'gender',
        'caste',
        'file',
        'address',
        'country',
        'state',
        'city',
        'pin',
        'father_name',
        'father_mobile',
        'father_occupation',
        'mothers_name',
        'academic',
        'institute_name',
        'percentage_grade',
        'examination_board',
    ];
}
