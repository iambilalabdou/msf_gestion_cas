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
        Schema::create('familles', function (Blueprint $table) {
            $table->increments('idFamille')->unsigned();
            $table->integer('idTypeCas')->unsigned()->index();
            $table->string('idZone', 2)->nullable();
            $table->string('nomFamille', 50);
            $table->string('adresse', 150)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('situation', 50)->nullable();
            $table->string('CINPere', 7)->nullable();
            $table->string('CINMere', 7)->nullable();
            $table->string('ramed', 20)->nullable();
            $table->integer('nbPersonne')->nullable();
            $table->integer('nbEnfants')->nullable();
            $table->date('dateDistribution')->nullable();
            $table->integer('points')->nullable();
            $table->string('observations', 255)->nullable();
            $table->timestamps();

            $table->foreign('idTypeCas')->references('idTypeCas')->on('type_cas');
            $table->foreign('idZone')->references('idZone')->on('zones');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familles');
    }
};