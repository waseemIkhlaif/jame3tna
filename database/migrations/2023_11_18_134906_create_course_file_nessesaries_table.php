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
        Schema::create('course_file_nessesaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('id')->on('nessesary_courses');
            $table->foreignId('file_id')->constrained('id')->on('nessesary_files');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_file_nessesaries');
    }
};
