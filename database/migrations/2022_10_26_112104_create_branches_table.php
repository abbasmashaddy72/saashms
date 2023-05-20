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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->constrained('areas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('address');
            $table->string('landmark');
            $table->string('manager_name');
            $table->string('manager_contact_no');
            $table->string('manager_email');
            $table->string('branch_number');
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
        Schema::dropIfExists('branches');
    }
};
