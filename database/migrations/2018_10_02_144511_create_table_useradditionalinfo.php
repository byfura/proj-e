<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUseradditionalinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('useradditionalinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->string('firstname', 150)->nullable();
            $table->string('surname', 50)->nullable();
            $table->string('house', 50)->nullable();
            $table->string('street', 50)->nullable();
            $table->string('town', 50)->nullable();
            $table->string('region', 50)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('postcode', 25)->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('mobile', 25)->nullable();
            $table->string('fax', 25)->nullable();
            $table->text('preference')->nullable();
            $table->string('carregno', 20)->nullable();
            $table->string('alternativeemail', 50)->nullable();
            $table->char('vatnumber',25);
            $table->tinyInteger('vatnumbervalidated');
            $table->text('vatnumbervalidatedresponse')->nullable();
            $table->double('totalpoint', 8, 2);
            
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
        Schema::dropIfExists('useradditionalinfo');
    }
}
