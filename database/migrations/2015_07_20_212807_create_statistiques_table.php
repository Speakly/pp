<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatistiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistiques', function(Blueprint $table) {
            $table->increments('id');
            $table->string('minutes');
            $table->string('passe');
            $table->string('paniers');
            $table->string('titulaire');
            $table->boolean('victoire');
            $table->integer('user_id');
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
        Schema::drop('statistiques');
    }
}
