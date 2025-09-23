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
        Schema::create('Prijs', function (Blueprint $table) {
            $table->increments('Id'); // INT UNSIGNED auto-increment
            $table->date('Datum');
            $table->time('Tijdslot');
            $table->decimal('Tarief', 10, 2);
            $table->boolean('Isactief')->default(true);
            $table->text('Opmerking')->nullable();
            $table->dateTime('Datumaangemaakt')->nullable();
            $table->dateTime('Datumgewijzigd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Prijs');
    }
};
