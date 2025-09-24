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
        Schema::create('Stand', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // voegt created_at en updated_at toe
            $table->softDeletes(); // voegt deleted_at toe
        });
    }

    /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        Schema::dropIfExists('Stand');
    }
};