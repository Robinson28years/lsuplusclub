<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_book', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('book_name')->default('')->comment('//书名');
            $table->string('order_email')->default('')->comment('//书拥有人的姓名');
            $table->string('book_discription')->default('')->comment('//书名关键字');
            $table->string('book_state')->default('未借出')->comment('//书籍状态');
            $table->string('book_isbn')->default('')->comment('//书籍的isbn');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('library_book');
    }
}
