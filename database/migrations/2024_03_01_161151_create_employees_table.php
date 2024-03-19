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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('names', 50);
            $table->string('last_name', 50);
            $table->unsignedBigInteger('gender_id');

            $table->string('telephone_one', 10);
            $table->string('telephone_two', 10)->nullable();
            $table->string('email', 50)->nullable()->unique();
            $table->string('curp', 18)->unique();
            $table->string('rfc', 13)->nullable()->unique();
            $table->string('nss', 13)->nullable()->unique();

            $table->unsignedBigInteger('job_id');

            $table->string('street', 100);
            $table->string('out_number', 20);
            $table->string('int_number', 20)->nullable();
            $table->unsignedBigInteger('colony_id');
            $table->string('first_reference_street', 50)->nullable();
            $table->string('second_reference_street', 50)->nullable();
            $table->string('address_reference', 255)->nullable();

            $table->string('bank_data', 20)->nullable()->unique();
            $table->enum('bank_data_type', ['CUENTA', 'CLABE', 'TARJETA'])->nullable();
            $table->string('bank', 50)->nullable();

            $table->unsignedBigInteger('edu_level_id');
            $table->string('field_of_study', 100)->nullable();

            $table->timestamps();

            $table->foreign('gender_id', 'FK_gender_id_employees')->references('id')->on('genders')->onDelete('cascade');
            $table->foreign('job_id', 'FK_job_id_employees')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('colony_id', 'FK_colony_id_employees')->references('id')->on('colonies')->onDelete('cascade');
            $table->foreign('edu_level_id', 'FK_edu_level_id_employees')->references('id')->on('educational_levels')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
