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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('teacherId',50)->constrained('teachers');
            $table->string('className');
            $table->tinyInteger('fromAge');
            $table->tinyInteger('ToAge');
            $table->time('fromTime');
            $table->time('toTime');
            $table->string('capacity',3);
            $table->string('price',20);
            $table->boolean('active');
            $table->string('class_image',100);
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
