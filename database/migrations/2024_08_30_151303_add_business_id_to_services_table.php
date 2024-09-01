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
        Schema::table('services', function (Blueprint $table) {
            // Add the business_id column as an unsigned big integer and set up a foreign key relationship
            $table->unsignedBigInteger('business_id')->after('id');

            // Add a foreign key constraint to the business_id column
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['business_id']);

            // Then drop the business_id column
            $table->dropColumn('business_id');
        });
    }
};
