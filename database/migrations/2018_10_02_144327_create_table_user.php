<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('userid');
            $table->string('name', 200);
            $table->string('username', 50);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->tinyInteger('block');
            $table->tinyInteger('sendemail')->nullable();
            $table->integer('languageid');
            $table->integer('currencyid');
            $table->dateTime('registerdate');
            $table->dateTime('lastvisitdate');
            $table->string('activation', 50);
            $table->dateTime('lastresettime');
            $table->integer('resetcount');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
