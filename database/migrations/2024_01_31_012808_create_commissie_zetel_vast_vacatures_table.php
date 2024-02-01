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
        Schema::create('commissie_zetel_vaste_vacatures', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('commissieZetel_id');
            $table->text('fractie_id')->nullable();
            $table->text('functie')->nullable();
            $table->dateTime('van')->nullable();
            $table->dateTime('totEnMet')->nullable();
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
        Schema::dropIfExists('commissie_zetel_vaste_vacatures');
    }
};
