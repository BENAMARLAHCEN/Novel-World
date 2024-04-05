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
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('cover')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->integer('views')->default(0); 
            $table->enum('language', ['English', 'Spanish', 'French']);
            $table->enum('status', ['rejected', 'published', 'pending'])->default('pending');
            $table->enum('age_rating', ['all', '13+', '16+', '18+'])->default('all');
            $table->boolean('is_public')->nullable();
            // foreign keys
            $table->foreign('statu_id')->references('id')->on('status');
            $table->foreign('user_id')->references('id')->on('users');  
            // add soft delete
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novels');
    }
};
