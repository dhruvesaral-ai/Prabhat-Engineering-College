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
        Schema::create('online_registrations', function (Blueprint $table) {
    $table->id();
    $table->string('courses');
    $table->string('contact_name');
    $table->string('contact_email')->unique();
    $table->string('contact_phone');
    $table->date('dob');
    $table->string('gender');
    $table->string('caste');
    $table->string('file')->nullable();
    $table->string('address');
    $table->string('country');
    $table->string('state');
    $table->string('city');
    $table->char('pin', 6);
    $table->string('father_name');
    $table->string('father_mobile');
    $table->string('father_occupation');
    $table->string('mothers_name');
    $table->string('academic');
    $table->string('institute_name');
    $table->decimal('percentage_grade', 5, 2);
    $table->string('examination_board');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_registration');
    }
};
