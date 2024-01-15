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
        Schema::create('leave_review_pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 50)->default('Leave a review');
            $table->text('intro');
            $table->string('label_name')->default('First name (optional, leave blank)');
            $table->string('label_school')->default('School (optional, leave blank)');
            $table->string('label_year_group')->default('Year group');
            $table->string('label_predicted')->default('Predicted grade');
            $table->string('label_achieved')->default('Grade achieved');
            $table->string('label_rating')->default('Rating');
            $table->string('label_comments')->default('Comments');
            $table->string('label_passcode')->default('Passcode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_review_pages');
    }
};
