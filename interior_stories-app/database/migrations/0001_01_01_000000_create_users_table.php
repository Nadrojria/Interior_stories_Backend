<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Ce fichier de migration crée les tables nécessaires pour la gestion des utilisateurs, des sessions et des tokens de réinitialisation de mot de passe.
// Il est utilisé pour initialiser la base de données lors de l'installation de l'application.
// Il crée les tables suivantes : 'users', 'password_reset_tokens' et 'sessions'.
return new class extends Migration
{
    public function up(): void
    {
        // Création de la table 'users'
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('name'); 
            $table->string('email')->unique(); // Email unique
            $table->timestamp('email_verified_at')->nullable(); // Date de vérification de l'email
            $table->string('password'); // Mot de passe hashé
            $table->rememberToken(); // Token pour la fonctionnalité "remember me"
            $table->enum('role', [ 'admin', 'customer'])->default('customer'); // Rôle de l'utilisateur
            $table->timestamps(); // Champs created_at et updated_at
        });

        // Table pour la gestion des tokens de réinitialisation de mot de passe
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Email comme clé primaire
            $table->string('token'); // Token de réinitialisation
            $table->timestamp('created_at')->nullable(); // Date de création du token
        });

        // Table pour la gestion des sessions utilisateurs
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Identifiant de session
            $table->foreignId('user_id')->nullable()->index(); // Référence à l'utilisateur
            $table->string('ip_address', 45)->nullable(); // Adresse IP de connexion
            $table->text('user_agent')->nullable(); // Informations sur le navigateur
            $table->longText('payload'); // Données de session
            $table->integer('last_activity')->index(); // Dernière activité
        });
    }
    
    public function down(): void
    {
        // Suppression des tables lors du rollback
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
