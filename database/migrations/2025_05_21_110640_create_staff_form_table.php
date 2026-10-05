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
        Schema::create('staff_form', function (Blueprint $table) {
            $table->id();
             $table->string('post_applied');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->integer('experience');
            $table->string('highest_degree');
            $table->string('phone');
            $table->string('resume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_form');
    }
};
