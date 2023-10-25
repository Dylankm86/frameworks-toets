<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('street');
            $table->string('home_nr');
            $table->string('zipcode');
            $table->string('city');
            $table->string('phone_nr');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('people');
    }
}
