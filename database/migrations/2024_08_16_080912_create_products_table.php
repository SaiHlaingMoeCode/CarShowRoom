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
            // $table->integer('brand_id');
            // $table->string('image');
            // $table->string('car_name');
            // $table->integer('price');
            // $table->longText('description');
            // $table->string('engine_type');
            // $table->string('fuel_type');
            // $table->string('transmission');
            // $table->string('seating_capacity');
            $table->timestamps();
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
