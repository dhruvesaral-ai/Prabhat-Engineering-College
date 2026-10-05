<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentRegistrationModel extends Model
{
   protected $table="for_student_registration";
   protected $fillable = [
    'full_name',
        'father_name',
        'mother_name',
        'dob',
        'gender',
        'religion',
        'category',
        'caste',
        'aadhaar',
        'pan_card',
        'blood',
        'maritul_status',
        'nationality',
        'p_address',
        'c_address',
        'state',
        'city',
        'pin',
        'mobile',
        'alt_mobile',
        'email',
        'parent_email',
        'courses',
        'sub_courses',
        'admission_mode',
        'year_semester',
        'exam_10',
        'board_10',
        'school_10',
        'passing_year_10',
        'percentage_10',
        'role_10',
        'photo',
        'signature',
        'aadhar_card',
        'pan_card_certificate',
        'bank_passbook',
        'income_certificate',
        'caste_certificate',
        'domicile_certificate',
        'transfer_certificate',
        'migration_certificate',
        'marksheet_10',
        'marksheet_12',
        'marksheet_grad',
        'entrance_scorecard',
        'account_holder_name',
        'bank_name',
        'account_number',
        'ifsc_code',
        'declaration',
        'digital_signature',
        'submission_date',
];

}
