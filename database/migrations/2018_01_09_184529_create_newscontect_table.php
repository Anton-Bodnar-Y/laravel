<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewscontectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_content', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('new_id', 11);
            $table->text('text', 1000);
            $table->string('img_1', 255);
            $table->string('img_2', 255);
            $table->string('img_3', 255);
            $table->rememberToken();
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
        Schema::drop('news_content');
    }
}
