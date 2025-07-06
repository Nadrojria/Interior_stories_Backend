<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Ce fichier de migration crée la table 'personal_access_tokens' pour stocker les tokens d'accès personnels.
// Il est utilisé pour gérer les tokens d'authentification des utilisateurs, permettant ainsi une
// authentification sécurisée et la gestion des permissions associées à chaque token.
// La table contient des informations telles que le nom du token, sa valeur unique, les permissions
// associées, la date de dernière utilisation et la date d'expiration du token.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->morphs('tokenable'); // Clés polymorphiques pour lier à différents modèles (ex: User)
            $table->string('name'); // Nom du token
            $table->string('token', 64)->unique(); // Valeur du token (unique)
            $table->text('abilities')->nullable(); // Permissions associées au token
            $table->timestamp('last_used_at')->nullable(); // Date de dernière utilisation
            $table->timestamp('expires_at')->nullable(); // Date d'expiration du token
            $table->timestamps(); // Champs created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    // Cette méthode est appelée lors du rollback des migrations pour supprimer la table créée
    // Elle permet de nettoyer la base de données en cas de besoin
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
