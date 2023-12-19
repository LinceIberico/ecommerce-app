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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_products_id')->constrained('category_products');
            $table->integer('sku')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            // $table->integer('stock')->default(0);
            $table->float('price',6,2);
            $table->float('old_price',6,2)->nullable();
            $table->integer('discount')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
