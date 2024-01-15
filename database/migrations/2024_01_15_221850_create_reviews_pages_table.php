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
        Schema::create('reviews_pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 50)->default('Reviews');
            $table->text('intro')->nullable();
            $table->string('label_added')->default('Date added');
            $table->string('label_name')->default('First name');
            $table->string('label_school')->default('Name of school');
            $table->string('label_predicted')->default('Predicted grade');
            $table->string('label_achieved')->default('Achieved grade');
            $table->string('label_year_group')->default('Year group');
            $table->string('label_rating')->default('Rating');
            $table->string('label_comments')->default('Comments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews_pages');
    }
};
