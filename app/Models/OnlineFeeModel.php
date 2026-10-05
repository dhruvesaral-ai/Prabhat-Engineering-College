<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineFeeModel extends Model
{
    protected $table="online_fees";

      protected $fillable = [
        'contact_name',
        'email',
        'mobile',
        'course',
        'roll_no',
        'amount_inr',
        'razorpay_payment_id'
    ];
}
