<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            // Identité
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email');
            $table->string('organisation')->nullable();
            $table->string('secteur')->nullable();  // secteur d'activité sélectionné

            // Message
            $table->text('message');

            // Gestion interne
            $table->enum('statut', ['nouveau', 'lu', 'en_traitement', 'traite', 'archive'])
                  ->default('nouveau');
            $table->text('notes_internes')->nullable(); // notes de l'équipe
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};