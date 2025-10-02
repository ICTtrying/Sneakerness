<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Ticket', function (Blueprint $table) {
            $table->increments('Id'); // primary key, auto-increment

            // foreign keys
            $table->unsignedInteger('Bezoeker_id');
            $table->unsignedInteger('Evenement_id');
            $table->unsignedInteger('Prijs_id');

            // other columns
            $table->integer('AantalTickets');
            $table->dateTime('Datum')->nullable();
            $table->boolean('Isactief')->default(true);
            $table->text('Opmerking')->nullable();
            $table->dateTime('Datumaangemaakt')->nullable();
            $table->dateTime('Datumgewijzigd')->nullable();

            // foreign key constraints
            $table->foreign('Bezoeker_id')->references('Id')->on('Bezoeker')->onDelete('cascade');
            $table->foreign('Evenement_id')->references('Id')->on('Evenement')->onDelete('cascade');
            $table->foreign('Prijs_id')->references('Id')->on('Prijs')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Ticket');
    }
};
