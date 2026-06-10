<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            // Relation secteur
            $table->foreignId('service_id')
                  ->nullable()
                  ->constrained('services')
                  ->nullOnDelete();

            // Informations générales
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');               // texte court (card listing)
            $table->longText('description_complete')->nullable(); // page détail

            // Localisation
            $table->string('pays')->nullable();        // ex: "Sénégal"
            $table->string('ville')->nullable();       // ex: "Dakar"
            $table->string('region')->nullable();

            // Statut & avancement
            $table->enum('statut', ['planification', 'en_cours', 'realise', 'suspendu'])
                  ->default('planification');
            $table->unsignedTinyInteger('progression')->default(0); // 0–100 %

            // Dates
            $table->date('date_debut')->nullable();
            $table->date('date_fin_prevue')->nullable();
            $table->date('date_livraison')->nullable();

            // Finances
            $table->string('volume_investissement')->nullable(); // ex: "€180M"
            $table->string('modele_financement')->nullable();   // ex: "PPP / BOT"

            // Médias & affichage
            $table->string('image_couverture')->nullable();
            $table->string('icone', 10)->nullable();            // emoji
            $table->string('couleur_bg', 30)->nullable();       // classe CSS

            // KPIs (données clés affichées en haut de la page détail)
            $table->json('kpis')->nullable();
            // ex: [{"label":"Capacité","value":"200 MW"}, {"label":"Emplois","value":"1200"}]

            // Phasage (timeline)
            $table->json('phases')->nullable();
            // ex: [{"numero":1,"titre":"Études","description":"...","statut":"termine"}]

            // Mise en avant
            $table->boolean('featured')->default(false); // projet vedette (double colonne)
            $table->integer('ordre')->default(0);

            $table->boolean('actif')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};