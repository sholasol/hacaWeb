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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file')->nullable(); // URL to the hosted file
            $table->string('type')->nullable(); // 'audio', 'video', 'image', etc.
            $table->string('length')->nullable();
            $table->integer('price')->nullable();
            $table->string('format')->nullable(); 
            $table->date('created')->nullable(); 
            $table->date('publish')->nullable(); 
            $table->string('copy')->default(false); 
            $table->string('listening')->default(false); 
            $table->string('download')->default(false); 
            $table->string('download_link')->nullable(); 
            $table->string('youtube')->nullable(); 
            $table->string('digital_sale')->default(false); 
            $table->enum('digital_formats', ['mp4', 'Blu-Ray'])->nullable(); 
            $table->string('sales_link')->nullable(); 
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
