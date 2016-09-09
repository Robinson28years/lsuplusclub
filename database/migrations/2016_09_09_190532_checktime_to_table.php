<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChecktimeToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checktime', function (Blueprint $table) {
            $table->increments('id');
			$table->string('schoolid');
			$table->string('name');
			$table->string('class');
			$table->string('checktime');

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
        Schema::drop('checktime');
    }
}
