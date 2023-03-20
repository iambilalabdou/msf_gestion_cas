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
        Schema::create('orphelins', function (Blueprint $table) {
            $table->increments('idOrphelin');
            $table->integer('idTypeCas')->unsigned()->index();
            $table->string('idZone', 2)->nullable();
            $table->string('nom', 50)->nullable();
            $table->string('nomMere', 50)->nullable();
            $table->string('adresse', 150)->nullable();
            $table->string('CINMere', 7)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->date('dateNaissance')->nullable();
            $table->date('dateDecesPere')->nullable();
            $table->string('niveauScolaire', 50)->nullable();
            $table->integer('tailleChemise')->nullable();
            $table->integer('pointure')->nullable();
            $table->string('observations', 255)->nullable();
            $table->integer('idImage')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('idTypeCas')->references('idTypeCas')->on('type_cas');
            $table->foreign('idZone')->references('idZone')->on('zones');
            $table->foreign('idImage')->references('idImage')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orphelins');
    }
};