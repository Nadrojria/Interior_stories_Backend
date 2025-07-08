<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('furnitures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2); // Prix avec 2 décimales
            $table->string('category');
            $table->enum('status', [ 'available', 'unavailable', 'sold'])->default('available');
            $table->string('image')->nullable();
            $table->string('alt');
            $table->text('description')->nullable();
            $table->string('measurements');
            $table->string('color');
            $table->string('material');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('furnitures');
    }
};
