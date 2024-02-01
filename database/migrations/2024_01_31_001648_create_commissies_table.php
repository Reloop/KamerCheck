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
        Schema::create('commissies', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->integer('nummer');
            $table->text('soort')->nullable();
            $table->text('afkorting')->nullable();
            $table->text('naamNl')->nullable();
            $table->text('naamEn')->nullable();
            $table->text('naamWebNl')->nullable();
            $table->text('naamWebEn')->nullable();
            $table->text('inhoudsopgave')->nullable();
            $table->dateTime('datumActief')->nullable();
            $table->dateTime('datumInactief')->nullable();
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
        Schema::dropIfExists('commissies');
    }
};
