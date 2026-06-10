<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('nom');                   // ex: "Gouvernement du Sénégal"
            $table->string('type')->nullable();      // ex: "Partenaire institutionnel"
            $table->string('pays')->nullable();      // ex: "Sénégal"
            $table->string('drapeau', 10)->nullable(); // emoji 🇸🇳
            $table->string('logo')->nullable();      // chemin image
            $table->timestamps();
        });

        // Table pivot : un projet peut avoir plusieurs partenaires
        Schema::create('project_partner', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->cascadeOnDelete();
            $table->foreignId('partner_id')->constrained('partners')->cascadeOnDelete();
            $table->string('role_dans_projet')->nullable(); // ex: "Architecte financier"
            $table->integer('ordre')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_partner');
        Schema::dropIfExists('partners');
    }
};