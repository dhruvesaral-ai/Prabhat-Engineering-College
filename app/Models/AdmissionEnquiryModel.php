<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionEnquiryModel extends Model
{
    protected $table="admission_enquiry";
    protected $fillable=[
        'name',
        'mobile',
        'email',
        'courses'
    ];
}
