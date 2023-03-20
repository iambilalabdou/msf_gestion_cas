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
        Schema::create('blacklists', function (Blueprint $table) {
            $table->integer('idCas')->primary()->unsigned();
            $table->string('raison', 255)->nullable();
            $table->integer('imageId')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('idCas')->references('idFamille')->on('familles')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blacklists');
    }
};