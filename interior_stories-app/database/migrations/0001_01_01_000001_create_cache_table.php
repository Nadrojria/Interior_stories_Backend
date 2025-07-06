<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Ce fichier de migration crée les tables nécessaires pour la gestion du cache dans l'application.
// Il est utilisé pour initialiser la base de données lors de l'installation de l'application.
// Il crée les tables suivantes : 'cache' pour stocker les données mises en cache et
// 'cache_locks' pour gérer les verrous de cache afin d'éviter les conflits
return new class extends Migration
{
    /**
     * Exécute les migrations.
     */
    public function up(): void
    {
        // Création de la table 'cache' pour stocker les données mises en cache
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary(); // Clé unique du cache
            $table->mediumText('value');      // Valeur stockée
            $table->integer('expiration');    // Timestamp d'expiration
        });

        // Création de la table 'cache_locks' pour gérer les verrous de cache
        // Cette table permet de s'assurer qu'une seule instance peut modifier une clé de cache à la fois
        // Elle est utile pour éviter les conflits lors de l'écriture dans le cache
        // Chaque verrou a une clé unique, un propriétaire et un timestamp d'expiration
        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary(); // Clé unique du verrou
            $table->string('owner');          // Propriétaire du verrou
            $table->integer('expiration');    // Timestamp d'expiration du verrou
        });
    }

    /**
     * Annule les migrations.
     */
    // Cette méthode est appelée lors du rollback des migrations pour supprimer les tables créées
    // Elle permet de nettoyer la base de données en cas de besoin
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
