<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opd_patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date');
            $table->time('time');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opd_patients');
    }
};
