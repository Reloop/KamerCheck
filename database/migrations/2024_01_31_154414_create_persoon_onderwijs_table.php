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
        Schema::create('persoon_onderwijs', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('opleidingNl')->nullable();
            $table->text('opleidingEn')->nullable();
            $table->text('instelling')->nullable();
            $table->text('plaats')->nullable();
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
        Schema::dropIfExists('persoon_onderwijs');
    }
};
