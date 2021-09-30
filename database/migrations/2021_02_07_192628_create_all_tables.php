<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->default('default.png');
            $table->string('cpf')->unique();
            $table->string('password');
            $table->string('zipcode');
            $table->string('address');
        });

        Schema::create('userfavorites', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_locality');
        });

        Schema::create('userappointments', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_locality');
            $table->datetime('ap_datetime');
        });

        Schema::create('localitys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->default('default.png');
            $table->float('stars')->default(0);
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
        });

        Schema::create('localityphotos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_locality');
            $table->string('url');
        });

        Schema::create('localityreviews', function (Blueprint $table) {
            $table->id();
            $table->integer('id_locality');
            $table->float('rate');
        });

        Schema::create('localitytestimonials', function (Blueprint $table) {
            $table->id();
            $table->integer('id_locality');
            $table->string('name');
            $table->float('rate');
            $table->string('body');
        });

        Schema::create('localityavailability', function (Blueprint $table) {
            $table->id();
            $table->integer('id_locality');
            $table->integer('weekday');
            $table->text('hours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('userfavorites');
        Schema::dropIfExists('userappointments');
        Schema::dropIfExists('localitys');
        Schema::dropIfExists('localityphotos');
        Schema::dropIfExists('localityreviews');
        Schema::dropIfExists('localitytestimonials');
        Schema::dropIfExists('localityavailability');
    }
}
