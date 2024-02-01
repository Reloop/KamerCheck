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
        Schema::create('zaak_actors', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('actorNaam')->nullable();
            $table->text('actorFractie')->nullable();
            $table->text('actorAfkorting')->nullable();
            $table->text('functie')->nullable();
            $table->text('relatie')->nullable();
            $table->text('sidActor')->nullable();
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
        Schema::dropIfExists('zaak_actors');
    }
};
