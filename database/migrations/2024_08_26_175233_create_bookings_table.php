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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to the user who made the booking
            $table->unsignedBigInteger('staff_id'); // Foreign key to the staff member associated with the booking
            $table->dateTime('start_time'); // Booking start time
            $table->dateTime('end_time'); // Booking end time
            $table->string('status')->default('pending'); // Status of the booking (e.g., pending, confirmed, canceled)
            $table->text('notes')->nullable(); // Additional notes for the booking
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
