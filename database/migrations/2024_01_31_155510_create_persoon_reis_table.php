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
        Schema::create('persoon_reizen', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('doel')->nullable();
            $table->text('bestemming')->nullable();
            $table->dateTime('van')->nullable();
            $table->dateTime('totEnMet')->nullable();
            $table->text('betaaldDoor')->nullable();
            $table->integer('gewicht')->nullable();
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
        Schema::dropIfExists('persoon_reizen');
    }
};
