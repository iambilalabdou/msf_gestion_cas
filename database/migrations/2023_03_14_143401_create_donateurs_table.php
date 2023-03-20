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
        Schema::create('donateurs', function (Blueprint $table) {
            $table->increments('idDonateur');
            $table->string('nomDonateur', 50)->nullable();
            $table->date('date')->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('aPart', 50)->nullable();
            $table->integer('nbOrphelins')->nullable();
            $table->string('observations', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donateurs');
    }
};