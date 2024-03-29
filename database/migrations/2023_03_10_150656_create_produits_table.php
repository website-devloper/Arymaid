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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('price');
            $table->string('image');
            $table->string('hoverImg');
            $table->string('utilisation');
            $table->string('description');
            $table->string('description2');
            $table->string('stock');
            $table->string('categorie');
            $table->string('status')->default('unavailable');
            $table->double('oldPrice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
