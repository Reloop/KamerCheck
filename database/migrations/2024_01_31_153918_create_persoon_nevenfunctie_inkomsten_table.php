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
        Schema::create('persoon_nevenfunctie_inkomsten', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('jaar')->nullable();
            $table->text('bedragSoort')->nullable();
            $table->text('bedragVoorvoegsel')->nullable();
            $table->text('bedragValuta')->nullable();
            $table->decimal('bedrag')->nullable();
            $table->text('bedragAchtervoegsel')->nullable();
            $table->text('frequentie')->nullable();
            $table->text('frequentieBeschrijving')->nullable();
            $table->text('opmerking')->nullable();
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
        Schema::dropIfExists('persoon_nevenfunctie_inkomsten');
    }
};
