<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('translations', function($table){

            $table->increments('id');
            $table->integer('sLangId');
            $table->integer('tLangId');
            $table->integer('sWordId');
            $table->integer('tWordId');
            $table->unique(['sLangId', 'tLangId', 'sWordId', 'tWordId']);
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
        Schema::drop('translations');
    }
}
