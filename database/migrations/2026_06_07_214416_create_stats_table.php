<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Chiffres clés affichés en hero / sections stats du site
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->string('valeur');        // ex: "24+", "€2B+", "12"
            $table->string('label');         // ex: "Projets accompagnés"
            $table->string('section');       // ex: "home", "projects", "about"
            $table->integer('ordre')->default(0);
            $table->boolean('actif')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};