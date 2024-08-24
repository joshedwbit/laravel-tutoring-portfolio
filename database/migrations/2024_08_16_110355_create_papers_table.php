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
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('year');
            $table->integer('paper_number');
            $table->string('season');
            $table->boolean('calculator');
            $table->boolean('higher');
            $table->integer('question_number');
            $table->text('topic');
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('papers');
    }
};
