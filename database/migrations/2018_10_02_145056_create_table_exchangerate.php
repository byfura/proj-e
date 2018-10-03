<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExchangerate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchangerate', function (Blueprint $table) {
            $table->increments('exchangerateid');
            $table->integer('currencyidfrom');
            $table->integer('currencyidto');
            $table->double('exchangerate', 4, 2);
            
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
        Schema::dropIfExists('exchangerate');
    }
}
