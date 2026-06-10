<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            // Relations
            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->restrictOnDelete();

            $table->foreignId('author_id')
                  ->constrained('experts')
                  ->restrictOnDelete();

            // Contenu
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');                    // résumé affiché sur la card
            $table->longText('content');               // corps de l'article (HTML/Markdown)
            $table->string('image_couverture')->nullable(); // chemin image hero

            // Meta
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();

            // Lecture & publication
            $table->unsignedSmallInteger('read_time')->default(5); // minutes
            $table->enum('statut', ['brouillon', 'publie', 'archive'])->default('brouillon');
            $table->timestamp('published_at')->nullable();

            // Stats
            $table->unsignedInteger('vues')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};