<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        /*
            Vamos a hacer una relación muchos a muchos,
            para ello debemos crear una tabla que funcione
            como Pivot...(la cual relacionará las 2 tablas).
            Laravel nos dice que el nombre que debe llevar
            la tabla Pivot es el nombre formado (en singular)
            con las 2 tablas que se vayan a relacionar.
            Ej:
            Articles & Tags = article & tag = article_tag
         */
        Schema::create('article_tag', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            // Establecemos las relaciones
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');

            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');


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
        Schema::drop('article_tag');
        Schema::drop('tags');
    }
}
