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
        Schema::create('Evenement', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Naam', 255);
            $table->date('Datum');
            $table->string('Locatie', 255)->nullable();
            $table->integer('AantalTicketsPerTijdslot')->default(0);
            $table->integer('BeschikbareStands')->default(0);
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
        Schema::dropIfExists('Evenement');
    }
};
