<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('interes', ['hombre', 'mujer', 'ambos']);
            $table->integer('edad_min');
            $table->integer('edad_max');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('geolocalizacion');
            $table->text('descripcion');
            $table->string('estado_civil');
            $table->string('fecha_nacimiento')->nullable();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->unique();
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
        Schema::drop('profiles');
    }
}
