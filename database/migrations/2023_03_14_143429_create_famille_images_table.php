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
        Schema::create('famille_images', function (Blueprint $table) {
            $table->integer('idImage')->unsigned();
            $table->integer('idFamille')->unsigned();
            $table->timestamps();

            $table->primary(['idImage', 'idFamille']);

            $table->foreign('idImage')->references('idImage')->on('images');
            $table->foreign('idFamille')->references('idFamille')->on('familles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('famille_images');
    }
};