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
        Schema::create('trip_class_facility', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trip_class_id')->references('id')->on('trip_classes')->onDelete('cascade');
            $table->foreignId('facility_id')->references('id')->on('facilities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_class_facility');
    }
};
