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
        Schema::create('notes', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('course_id'); // Foreign key to courses table
            $table->string('duration'); // Note duration
            $table->string('instructors'); // Instructors
            $table->text('description'); // Description
            $table->timestamps(); // Adds created_at and updated_at

            // Foreign key constraint
            $table->foreign('course_id')
                  ->references('id') // Referencing id in courses table
                  ->on('courses')    // Parent table
                  ->onDelete('cascade'); // Delete notes if the course is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
