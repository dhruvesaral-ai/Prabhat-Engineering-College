<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('for_student_registration', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('dob');
            $table->enum('gender', ['Male', 'Female', 'Others']); // Changed 'Other' to 'Others' to match form
            $table->string('religion');
            $table->string('category');
            $table->string('caste');
            $table->string('aadhaar', 12);
            $table->string('pan_card', 10); // Changed from 12 to 10 (PAN is 10 chars)
            $table->string('blood')->nullable();
            $table->string('marital_status'); // Corrected from 'maritul_status'
            $table->string('nationality');
            $table->text('p_address'); // Changed to text for longer addresses
            $table->text('c_address'); // Changed to text for longer addresses
            $table->string('state');
            $table->string('city');
            $table->string('pin', 6);
            $table->string('mobile', 15);
            $table->string('alt_mobile', 15)->nullable();
            $table->string('email')->unique();
            $table->string('parent_email'); // Removed unique() as multiple students might have same parent
            $table->string('courses');
            $table->string('sub_courses');
            $table->string('admission_mode');
            $table->string('year_semester');
            $table->string('exam_10');
            $table->string('board_10');
            $table->string('school_10');
            $table->string('passing_year_10');
            $table->string('percentage_10');
            $table->string('roll_10');
            $table->string('photo')->nullable();
            $table->string('signature')->nullable();
            $table->string('aadhar_card')->nullable();
            $table->string('pan_card_certificate')->nullable();
            $table->string('bank_passbook')->nullable();
            $table->string('income_certificate')->nullable();
            $table->string('caste_certificate')->nullable();
            $table->string('domicile_certificate')->nullable();
            $table->string('transfer_certificate')->nullable();
            $table->string('migration_certificate')->nullable();
            $table->string('marksheet_10')->nullable();
            $table->string('marksheet_12')->nullable();
            $table->string('marksheet_grad')->nullable();
            $table->string('entrance_scorecard')->nullable();
            $table->string('account_holder_name');
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('ifsc_code');
            $table->string('branch_name'); // Corrected from stirng() to string()
            $table->boolean('declaration')->default(false); // Changed to boolean
            $table->string('digital_signature')->nullable();
            $table->date('submission_date')->nullable(); // Changed to date type
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('for_student_registration');
    }
};