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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Business name
            $table->string('phone')->nullable(); // Optional business phone number
            $table->string('email')->nullable(); // Optional business email address
            $table->text('description')->nullable(); // Optional business description
            $table->string('address')->nullable(); // Optional business address
            $table->unsignedBigInteger('owner_id'); // Foreign key to the owner (user)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
