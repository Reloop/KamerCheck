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
        Schema::create('vergaderingen', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('soort')->nullable();
            $table->text('titel')->nullable();
            $table->text('zaal')->nullable();
            $table->text('vergaderjaar')->nullable();
            $table->bigInteger('vergaderingsNummer')->nullable();
            $table->dateTime('datum')->nullable();
            $table->dateTime('aanvangstijd')->nullable();
            $table->dateTime('sluiting')->nullable();
            $table->text('kamer')->nullable();
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
        Schema::dropIfExists('vergaderingen');
    }
};
