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
        Schema::create('zaken', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('nummer')->nullable();
            $table->text('soort')->nullable();
            $table->text('onderwerp')->nullable();
            $table->dateTime('gestartOp')->nullable();
            $table->text('organisatie')->nullable();
            $table->text('titel')->nullable();
            $table->text('citeertitel')->nullable();
            $table->text('alias')->nullable();
            $table->text('grondslagvoorhang')->nullable();
            $table->text('termijn')->nullable();
            $table->integer('vergaderjaar')->nullable();
            $table->integer('volgnummer')->nullable();
            $table->text('status')->nullable();
            $table->text('huidigeBehandelstatus')->nullable();
            $table->boolean('afgedaan')->nullable();
            $table->boolean('grootProject')->nullable();
            $table->text('kabinetsappreciatie')->nullable();
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
        Schema::dropIfExists('zaken');
    }
};
