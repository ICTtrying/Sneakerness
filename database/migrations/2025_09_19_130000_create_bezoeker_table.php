<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('Bezoeker', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Naam', 255)->nullable(false);
            $table->string('Email', 255)->unique()->nullable(false);
            $table->boolean('Isactief')->default(true);
            $table->text('Opmerking')->nullable();
            $table->dateTime('Datumaangemaakt')->nullable()->default(null);
            $table->dateTime('Datumgewijzigd')->nullable()->default(null);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Bezoeker');
    }
};
