<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materiels', function (Blueprint $table) {
            $table->id();
            $table->string('Marque');
            $table->string('services_tag');
            $table->string('code_barre');
            $table->string('configue');

            $table->foreignId('etats_id');
            $table->foreignId('divisions_id')->constrained();
            $table->foreignId('services_id')->constrained();
            $table->foreignId('users_id')->constrained();
            $table->foreignId('categories_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiels');
    }
};
