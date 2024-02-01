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
        Schema::create('fractie_zetel_personen', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('functie')->nullable();
            $table->dateTime('van');
            $table->dateTime('totEnMet');
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
        Schema::dropIfExists('fractie_zetel_personen');
    }
};
