<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffFormModel extends Model
{
     protected $table ='staff_form';

    // Allow mass assignment on these fields
    protected $fillable = [
        'post_applied',
        'full_name',
        'email',
        'experience',
        'highest_degree',
        'phone',
        'resume',
    ];
}
