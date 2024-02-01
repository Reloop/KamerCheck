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
        Schema::create('activiteit_actors', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('activiteit_id');
            $table->text('actorNaam')->nullable();
            $table->text('actorFractie')->nullable();
            $table->text('relatie')->nullable();
            $table->integer('volgorde')->nullable();
            $table->text('functie')->nullable();
            $table->text('spreektijd')->nullable();
            $table->text('SIDactor')->nullable();
            $table->text('persoon_id');
            $table->text('fractie_id');
            $table->text('commissie_id');
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
        Schema::dropIfExists('activiteit_actors');
    }
};
