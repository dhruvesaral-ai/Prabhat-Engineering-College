<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('online_fees', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('course');
            $table->string('roll_no');
            $table->decimal('amount_inr', 10, 2);
            $table->string('razorpay_payment_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('online_fees');
    }
};
