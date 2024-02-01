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
        Schema::create('personen', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('nummer');
            $table->text('titels')->nullable();
            $table->text('initialen')->nullable();
            $table->text('tussenvoegsel')->nullable();
            $table->text('achternaam')->nullable();
            $table->text('voornamen')->nullable();
            $table->text('roepnaam')->nullable();
            $table->text('geslacht')->nullable();
            $table->text('functie')->nullable();
            $table->dateTime('geboortedatum')->nullable();
            $table->text('geboorteplaats')->nullable();
            $table->text('geboorteland')->nullable();
            $table->dateTime('overlijdensdatum')->nullable();
            $table->text('overlijdensplaats')->nullable();
            $table->text('woonplaats')->nullable();
            $table->text('land')->nullable();
            $table->text('fractielabel')->nullable();
            $table->dateTime('gewijzigdOp');
            $table->dateTime('apiGewijzigdOp');
            $table->boolean('verwijderd');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personen');
    }
};
