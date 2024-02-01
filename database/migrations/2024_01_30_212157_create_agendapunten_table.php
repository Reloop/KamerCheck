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
        Schema::create('agendapunten', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('activiteit_id')->nullable();
            $table->text('nummer')->nullable();
            $table->text('onderwerp')->nullable();
            $table->dateTime('aanvangstijd')->nullable();
            $table->dateTime('eindtijd')->nullable();
            $table->integer('volgorde')->nullable();
            $table->text('rubriek')->nullable();
            $table->text('noot')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('agendapunten');
    }
};
