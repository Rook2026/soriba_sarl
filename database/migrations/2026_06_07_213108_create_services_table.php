<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('icon', 10)->nullable();        // emoji ou nom d'icône
            $table->string('couleur_bg', 30)->nullable();  // classe CSS ex: "bg-energy"
            $table->text('description');                   // texte court (card listing)
            $table->longText('description_complete')->nullable(); // texte page détail
            $table->json('points_cles')->nullable();       // ["Structuration PPP", ...]
            $table->integer('ordre')->default(0);
            $table->boolean('actif')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};