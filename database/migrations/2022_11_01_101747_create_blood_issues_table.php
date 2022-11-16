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
        Schema::create('blood_issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('issued_patient_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('blood_donation_id')->constrained('blood_donations')->onUpdate('cascade')->onDelete('cascade');
            $table->float('amount', 8, 2);
            $table->integer('count');
            $table->longText('description');
            $table->date('issue_date')->default(today());
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
        Schema::dropIfExists('blood_issues');
    }
};
