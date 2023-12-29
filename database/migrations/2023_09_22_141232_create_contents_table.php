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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id')->references('id')->on('lessons')->cascadeOnDelete();
            $table->string('name', 256);
            $table->text('description');
            $table->string('image_path', 256)->nullable();
            $table->string('video_type', 256)->nullable();
            $table->string('video_path', 256)->nullable();
            $table->string('youtube_link', 256)->nullable();
            $table->string('pdf_path', 256)->nullable();
            $table->foreignId('created_by')->nullable()->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('updated_by')->nullable()->references('id')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
