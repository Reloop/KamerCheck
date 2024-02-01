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
        Schema::create('persoon_contactinformaties', function (Blueprint $table) {
            $table->id();
            $table->text('openData_id');
            $table->text('soort')->nullable();
            $table->text('waarde')->nullable();
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
        Schema::dropIfExists('persoon_contactinformaties');
    }
};
