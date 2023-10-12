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
        Schema::create('products_supplies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade'); // Opciones de eliminación (opcional)
            $table->unsignedBigInteger('supplies_id');
            $table->foreign('supplies_id')
                ->references('id')
                ->on('supplies')
                ->onDelete('cascade'); // Opciones de eliminación (opcional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_supplies');
    }
};
