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
        Schema::create('activiteiten', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('soort')->nullable();
            $table->text('nummer')->nullable();
            $table->text('onderwerp')->nullable();
            $table->text('datumsoort')->nullable();
            $table->dateTime('datum')->nullable();
            $table->dateTime('aanvangstijd')->nullable();
            $table->dateTime('eindtijd')->nullable();
            $table->text('locatie')->nullable();
            $table->boolean('besloten');
            $table->text('status');
            $table->text('vergaderJaar')->nullable();
            $table->text('kamer');
            $table->text('noot')->nullable();
            $table->integer('VRSnummer')->nullable();
            $table->text('SIDvoortouw')->nullable();
            $table->text('voortouwNaam')->nullable();
            $table->text('voortouwAfkorting')->nullable();
            $table->text('voortouwKorteNaam')->nullable();
            $table->text('voortouwCommissie_id')->nullable();
            $table->date('aanvraagDatum')->nullable();
            $table->date('datumVerzoekEersteVerlenging')->nullable();
            $table->date('datumMededelingEersteVerlenging')->nullable();
            $table->date('datumVerzoekTweedeVerlenging')->nullable();
            $table->date('datumMededelingTweedeVerlenging')->nullable();
            $table->date('vervaldatum')->nullable();
            $table->dateTime('gewijzigdOp');
            $table->dateTime('ApiGewijzigdOp');
            $table->boolean('verwijderd');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activiteiten');
    }
};
