<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Modèle pour la création de la table 'orders'
// Cette table stockera les informations sur les commandes passées par les utilisateurs pour les meubles
// Elle inclut des champs pour l'ID du meuble, l'ID de l'utilisateur, le statut de la commande et les timestamps
// Le champ 'status' utilise une énumération pour indiquer si la commande est en attente ou vendue
// Les timestamps 'created_at' et 'updated_at' sont automatiquement gérés par Laravel       
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('furniture_id');
            $table->bigInteger('user_id');
            $table->enum('status', [ 'pending', 'sold'])->default('pending');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
