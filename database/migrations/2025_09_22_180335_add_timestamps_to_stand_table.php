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
<<<<<<<< HEAD:vendor/laravel/framework/src/Illuminate/Database/Migrations/stubs/migration.create.stub
        Schema::create('{{ table }}', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
========
        Schema::table('Stand', function (Blueprint $table) {
            $table->timestamps(); // voegt created_at en updated_at toe
            $table->softDeletes(); // voegt deleted_at toe
>>>>>>>> origin/Stand:database/migrations/2025_09_22_180335_add_timestamps_to_stand_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:vendor/laravel/framework/src/Illuminate/Database/Migrations/stubs/migration.create.stub
        Schema::dropIfExists('{{ table }}');
========
        Schema::table('Stand', function (Blueprint $table) {
            //
        });
>>>>>>>> origin/Stand:database/migrations/2025_09_22_180335_add_timestamps_to_stand_table.php
    }
};
