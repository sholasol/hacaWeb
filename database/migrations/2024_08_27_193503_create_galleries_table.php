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
            $table->string('file'); // URL to the hosted file
            $table->string('type')->nullable(); // 'audio', 'video', 'image', etc.
            $table->integer('length')->nullable();
            $table->string('format')->nullable(); 
            $table->date('created')->nullable(); 
            $table->date('published')->nullable(); 
            $table->boolean('physical_copy')->default(false); 
            $table->boolean('for_listening')->default(false); 
            $table->boolean('free_download')->default(false); 
            $table->string('download_link')->nullable(); 
            $table->boolean('digital_sale')->default(false); 
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
