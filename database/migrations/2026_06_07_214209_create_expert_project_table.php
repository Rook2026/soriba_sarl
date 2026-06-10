<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Table pivot : un projet peut impliquer plusieurs experts SORIBA
        Schema::create('expert_project', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expert_id')->constrained('experts')->cascadeOnDelete();
            $table->foreignId('project_id')->constrained('projects')->cascadeOnDelete();
            $table->string('role_dans_projet')->nullable(); // ex: "Chef de projet"
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('expert_project');
    }
};