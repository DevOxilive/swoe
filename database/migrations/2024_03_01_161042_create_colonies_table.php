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
        Schema::create('colonies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('city', 50)->nullable();
            $table->unsignedBigInteger('municipality_id');
            $table->string('township', 25)->nullable();
            $table->unsignedInteger('zip_code');

            $table->foreign('municipality_id', 'FK_municipality_id_colonies')->references('id')->on('municipalities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colonies');
    }
};
