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
        Schema::create('stemmingen', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('besluit_id');
            $table->text('soort');
            $table->text('fractie');
            $table->integer('fractieGrootte');
            $table->text('actorNaam')->nullable();
            $table->text('actorFractie')->nullable();
            $table->text('persoon')->nullable();
            $table->boolean('vergissing')->nullable();
            $table->text('sidActorLid')->nullable();
            $table->text('sidActorFractie')->nullable();
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
        Schema::dropIfExists('stemmingen');
    }
};
