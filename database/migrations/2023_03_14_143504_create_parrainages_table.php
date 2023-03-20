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
        Schema::create('parrainages', function (Blueprint $table) {
            $table->increments('idParrainage');
            $table->integer('idDonateur')->unsigned();
            $table->integer('idOrphelin')->unsigned();
            $table->date('dateDebut')->nullable();
            $table->date('dateFin')->nullable();
            $table->decimal('banque', 10, 2)->default(0.0);
            $table->decimal('cash', 10, 2)->default(0.0);
            $table->string('observations', 255)->nullable();
            $table->timestamps();

            $table->foreign('idDonateur')->references('idDonateur')->on('donateurs');
            $table->foreign('idOrphelin')->references('idOrphelin')->on('orphelins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parrainages');
    }
};