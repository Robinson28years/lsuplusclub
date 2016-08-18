<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVipuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vipuser', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('schoolid');
$table->string('college');
$table->string('class');
$table->string('phone');
$table->string('sphone');
$table->string('cs1');
$table->string('cs2');
$table->string('cs21');
$table->string('cs22');
$table->string('cs23');
$table->string('cs24');
$table->string('cs25');
$table->string('cs26');
$table->string('cs31');
$table->string('cs32');
$table->string('cs33');
$table->string('cs34');
$table->string('cs35');
$table->string('cs36');
$table->string('cs37');
$table->string('cs38');
$table->string('cs39');
$table->string('cs310');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vipuser');
    }
}
