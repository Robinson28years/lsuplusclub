<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryAdministrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_administration', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->comment('//书的ID');
            $table->string('borrower_email')->default('')->comment('//借书人的email');
            $table->string('borrower_phone')->default('')->comment('//借书人的联系方式（长号）');
            $table->string('lending_time')->default('')->comment('//借书的时间');
            $table->string('return_about_time')->default('')->comment('//归还书的大概时间');
            $table->string('return_time')->default('未归还')->comment('//归还书的时间');
            $table->string('book_inter')->default('')->comment('//书籍的审核状态');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('library_administration');
    }
}
