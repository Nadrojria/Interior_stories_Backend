<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


//Modèle pour la création de la table 'furnitures'
// Cette table stockera les informations sur les meubles disponibles à la vente
// Elle inclut des champs pour le nom, le prix, la catégorie, le statut, l'image et la description des meubles
// Le champ 'status' utilise une énumération pour indiquer si le meuble est disponible
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
            $table->string('image')->nullable(); // Pour plus tard
            $table->text('description')->nullable(); // Pour plus tard
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('furnitures');
    }
};
