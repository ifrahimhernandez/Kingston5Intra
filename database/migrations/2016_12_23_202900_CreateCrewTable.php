<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('crews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('crew_title');
            $table->string('address');
            $table->string('phone');
            $table->string('driver_license');
            $table->string('social_security');
            $table->string('i9_number');
            $table->string('resume');
            $table->string('imdb_experience');
            $table->string('w2_employee');
            $table->string('emergency_contact');
            $table->string('Union');
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
        Schema::drop('crews');
    }
}
