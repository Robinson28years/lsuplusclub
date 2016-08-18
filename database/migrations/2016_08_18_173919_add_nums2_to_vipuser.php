<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNums2ToVipuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vipuser', function (Blueprint $table) {
			$table->string('1');
			$table->string('2');
			$table->string('3');
			$table->string('4');
			$table->string('5');
			$table->string('9');
			$table->string('17');
			$table->string('18');
			$table->string('19');
			$table->string('20');
			$table->string('21');
			$table->string('22');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vipuser', function (Blueprint $table) {
            //
        });
    }
}
