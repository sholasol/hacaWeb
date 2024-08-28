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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->string('product');
            $table->string('currency');
            $table->string('customer');
            $table->string('email');
            $table->string('status');
            $table->string('method');
            $table->string('type');
            $table->timestamps();
        });
    }


    protected $fillable = ['payment_id', 'product', 'quantity', 'price', 'currency',
    'customer', 'email', 'status', 'method'
];

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
