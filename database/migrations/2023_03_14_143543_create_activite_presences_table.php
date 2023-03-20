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
        Schema::create('activite_presences', function (Blueprint $table) {
            $table->integer('idMembre')->unsigned();
            $table->integer('idActivite')->unsigned();
            $table->primary(['idMembre', 'idActivite']);
            $table->integer('membrePts');
            $table->foreign('idMembre')->references('idMembre')->on('membres')->onDelete('cascade');
            $table->foreign('idActivite')->references('idActivite')->on('activites')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activite_presences');
    }
};