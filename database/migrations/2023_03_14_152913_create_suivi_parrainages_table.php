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
        Schema::create('suivi_parrainages', function (Blueprint $table) {
            $table->increments('idSuiviParrainage');
            $table->integer('idParrainage')->unsigned();
            $table->boolean('mois1')->default(false);
            $table->boolean('mois2')->default(false);
            $table->boolean('mois3')->default(false);
            $table->boolean('mois4')->default(false);
            $table->boolean('mois5')->default(false);
            $table->boolean('mois6')->default(false);
            $table->boolean('mois8')->default(false);
            $table->boolean('mois9')->default(false);
            $table->boolean('mois10')->default(false);
            $table->boolean('mois11')->default(false);
            $table->boolean('mois12')->default(false);
            $table->timestamps();

            $table->foreign('idParrainage')->references('idParrainage')->on('parrainages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suivi_parrainages');
    }
};