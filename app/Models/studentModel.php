<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    protected $table ="student";
    protected $fillable=['name','email','password'];
    protected $hidden=['password'];
    protected $casts=[
        'password'=>'hashed',
    ];
}
