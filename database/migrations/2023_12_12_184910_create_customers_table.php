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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('phone')->nullable();
            $table->text('shipping_address')->nullable();
            $table->text('city')->nullable();
            $table->text('province')->nullable();
            $table->integer('postal_code')->nullable();
            $table->text('country')->nullable();
            $table->string('credit_card',18)->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['active', 'suspended', 'blocked'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
