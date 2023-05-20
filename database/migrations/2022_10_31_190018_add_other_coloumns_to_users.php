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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('status')->after('password');
            $table->enum('gender', ['Male', 'FeMale', 'Trans'])->after('name');
            $table->date('dob')->after('gender');
            $table->string('qualification')->after('dob');
            $table->string('designation')->after('qualification');
            $table->enum('blood_group', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'])->after('designation');
            $table->string('language')->default('en')->after('blood_group');
            $table->string('contact_no')->after('language');
            $table->string('address')->after('contact_no');
            $table->foreignId('area_id')->after('address')->constrained('areas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('image')->after('area_id')->nullable();
            $table->longText('about')->after('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('gender');
            $table->dropColumn('dob');
            $table->dropColumn('qualification');
            $table->dropColumn('designation');
            $table->dropColumn('blood_group');
            $table->dropColumn('language');
            $table->dropColumn('contact_no');
            $table->dropColumn('address');
            $table->dropColumn('image');
            $table->dropColumn('about');
            $table->dropForeign('area_id');
            $table->dropColumn('area_id');
        });
    }
};
