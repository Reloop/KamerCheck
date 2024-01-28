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
            $table->text('OpenData_id');
            $table->text('soort');
            $table->text('nummer');
            $table->text('onderwerp');
            $table->text('datumsoort');
            $table->dateTime('datum');
            $table->dateTime('aanvangstijd');
            $table->dateTime('eindtijd');
            $table->text('locatie')->nullable();
            $table->boolean('besloten');
            $table->text('status');
            $table->text('vergaderJaar');
            $table->text('kamer');
            $table->text('noot')->nullable();
            $table->integer('VRSnummer')->nullable();
            $table->text('SIDvoortouw');
            $table->text('voortouwNaam');
            $table->text('voortouwAfkorting');
            $table->text('voortouwKorteNaam');
            $table->text('voortouwCommissie_id');
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
