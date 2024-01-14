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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 50)->default('Joshua Edwards Maths Tutoring');
            $table->string('about_title', 20)->default('About');
            $table->text('about_copy');
            $table->string('aim_title', 20)->default('Aim');
            $table->text('aim_copy');
            $table->string('background_title', 20)->default('Background');
            $table->text('background_copy');
            $table->string('approach_title', 20)->default('Approach');
            $table->text('approach_copy');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
