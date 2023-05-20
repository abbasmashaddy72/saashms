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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('department_id')->constrained('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->string('reg_no');
            $table->text('specialist');
            $table->decimal('opd_reg_fee', 8, 2);
            $table->decimal('ipd_reg_fee', 8, 2);
            $table->decimal('opd_consultation_fee', 8, 2);
            $table->decimal('ipd_consultation_fee', 8, 2);
            $table->string('fb');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('gmb');
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
        Schema::dropIfExists('doctors');
    }
};
