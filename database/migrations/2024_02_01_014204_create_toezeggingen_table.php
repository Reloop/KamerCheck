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
        Schema::create('toezeggingen', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('toegezegdAanFractie')->nullable();
            $table->text('toegezegdAanPersoon')->nullable();
            $table->dateTime('aanmaakdatum')->nullable();
            $table->text('nummer')->nullable();
            $table->text('activiteitNummer')->nullable();
            $table->text('naam')->nullable();
            $table->text('achternaam')->nullable();
            $table->text('initialen')->nullable();
            $table->text('tussenvoegsel')->nullable();
            $table->text('voornaam')->nullable();
            $table->text('achtervoegsel')->nullable();
            $table->text('titulatuur')->nullable();
            $table->text('functie')->nullable();
            $table->text('status')->nullable();
            $table->dateTime('datumNakoming')->nullable();
            $table->text('kamerbriefNakoming')->nullable();
            $table->text('ministerie')->nullable();
            $table->text('tekst')->nullable();
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
        Schema::dropIfExists('toezeggingen');
    }
};
