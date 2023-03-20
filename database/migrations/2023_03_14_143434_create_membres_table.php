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
        Schema::create('membres', function (Blueprint $table) {
            $table->increments('idMembre');
            $table->string('nomPrenomMembre', 50);
            $table->string('CIN', 7);
            $table->date('dateNaissance');
            $table->string('adresse', 150);
            $table->string('telephone', 20);
            $table->string('profession', 50);
            $table->date('dateEntree');
            $table->date('dateSortir')->nullable();
            $table->integer('idImage')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('idImage')->references('idImage')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres');
    }
};