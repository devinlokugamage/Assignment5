<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('fName');
            $table->string('lName');
            $table->string('gender');
            $table->string('dob');
            $table->string('address');   
            $table->string('city');
            $table->string('province');
            $table->string('postalCode');
            $table->string('phoneNo');
            $table->string('email');
            $table->string('currentMeds');
            $table->string('allergies');
            $table->string('referingDoctor');
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
        Schema::dropIfExists('patients');
    }
}
