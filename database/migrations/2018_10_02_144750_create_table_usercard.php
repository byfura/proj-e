<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsercard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usercard', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->binary('ccardno')->nullable();
            $table->binary('ccardissued')->nullable();
            $table->binary('ccardexpiry')->nullable();
            $table->binary('ccardissno')->nullable();
            $table->binary('ccardname')->nullable();
            $table->binary('cvv')->nullable();
            $table->binary('type')->nullable();
            
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
        Schema::dropIfExists('usercard');
    }
}
