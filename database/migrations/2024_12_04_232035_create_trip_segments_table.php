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
        Schema::create('trip_segments', function (Blueprint $table) {
            $table->id();
            $table->integer('sequence');
            $table->foreignId('trip_id')->constrained()->cascadeOnDelete();
            $table->foreignId('terminal_id')->constrained()->cascadeOnDelete();
            $table->dateTime('time');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_segments');
    }
};
