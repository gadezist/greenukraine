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
        Schema::create('marker_data', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('land_area')->nullable();
            $table->string('soil')->nullable();
            $table->string('crops')->nullable();
            $table->string('damage')->nullable();
            $table->string('expert_report')->nullable();
            $table->string('level_of_damage')->nullable();
            $table->json('geo_json')->nullable();
            $table->geometry('geom')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marker_data');
    }
};
