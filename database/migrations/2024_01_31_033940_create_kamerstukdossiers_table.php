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
        Schema::create('kamerstukdossiers', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('titel')->nullable();
            $table->text('citeertitel')->nullable();
            $table->text('alias')->nullable();
            $table->bigint('nummer')->nullable();
            $table->text('toevoeging')->nullable();
            $table->integer('hoogsteVolgnummer');
            $table->boolean('afgesloten')->nullable();
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
        Schema::dropIfExists('kamerstukdossiers');
    }
};
