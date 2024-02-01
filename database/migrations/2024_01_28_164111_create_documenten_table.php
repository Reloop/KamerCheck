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
        Schema::create('documenten', function (Blueprint $table) {
            $table->id();
            $table->integer('openData_id');
            $table->text('soort');
            $table->text('documentNummer');
            $table->text('titel');
            $table->text('onderwerp');
            $table->date('datum');
            $table->text('vergaderjaar');
            $table->text('kamer');
            $table->integer('volgnummer');
            $table->text('citeertitel');
            $table->text('alias');
            $table->dateTime('datumRegistratie');
            $table->dateTime('datumOntvangst');
            $table->integer('aanhangselNummer');
            $table->text('kenmerkAfzender');
            $table->text('organisatie');
            $table->text('contentType');
            $table->text('contentLength');
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
        Schema::dropIfExists('documenten');
    }
};
