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
        Schema::create('besluiten', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('agendapunt_id')->nullable();
            $table->text('zaak_id')->nullable();
            $table->text('stemmingsSoort')->nullable();
            $table->text('besluitSoort')->nullable();
            $table->text('besluitTekst')->nullable();
            $table->text('opmerking')->nullable();
            $table->text('status')->nullable();
            $table->integer('agendapuntZaakBesluitVolgorde')->nullable();
            $table->dateTime('gewijzigdOp')->nullable();
            $table->dateTime('apiGewijzigdOp')->nullable();
            $table->boolean('verwijderd');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('besluiten');
    }
};
