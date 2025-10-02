<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Verkoper;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Stand', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Verkoper::class);
            $table->string('StandType');
            $table->decimal('Prijs', 8, 2);
            $table->boolean('VerhuurdStatus')->default(false);
            $table->integer('Dagen');
            $table->timestamps();
            $table->softDeletes();
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