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
        Schema::create('verkoper', function (Blueprint $table) {
            $table->id();
            $table->string('Naam', 255);
            $table->boolean('SpecialeStatus')->default(0);
            $table->string('VerkooptSoort', 100)->nullable();
            $table->enum('StandType', ['A', 'AA', 'AA+'])->default('A');
            $table->integer('Dagen');
            $table->string('Logo', 255)->nullable();
            $table->boolean('Isactief')->default(true);
            $table->text('Opmerking')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verkoper');
    }
};