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
            $table->integer('type')->nullable(); 
            $table->string('department', 50)->nullable(); 
            $table->string('intake', 50)->nullable(); // Mark as nullable
            $table->string('course', 50)->nullable(); // Mark as nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['type', 'department', 'intake', 'course']);
        });
    }
};
