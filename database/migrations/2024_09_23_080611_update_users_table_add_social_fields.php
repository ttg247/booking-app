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
        Schema::table('users', function (Blueprint $table) {
            $table->string('google_id')->nullable()->after('role'); // Google ID
            $table->string('facebook_id')->nullable()->after('google_id'); // Facebook ID
            $table->string('google_avatar')->nullable()->after('facebook_id'); // Google avatar URL
            $table->string('facebook_avatar')->nullable()->after('google_avatar'); // Facebook avatar URL
            $table->text('google_access_token')->nullable()->after('facebook_avatar'); // Google access token
            $table->text('google_refresh_token')->nullable()->after('google_access_token'); // Google refresh token
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('google_id');
            $table->dropColumn('facebook_id');
            $table->dropColumn('google_avatar');
            $table->dropColumn('facebook_avatar');
            $table->dropColumn('google_access_token');
            $table->dropColumn('google_refresh_token');
        });
    }
};
