<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            // llaves foraneas
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
                /*
                    Añadimos el modificador unsigned().
                    (si no se lo pones, no funciona)
                    mirar documentación:
                    http://laravel.com/docs/5.1/migrations#foreign-key-constraints
                 */

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
                /*
                    la llave foranea 'user_id' hace referencia
                    a al campo 'id' de la tabla 'user'
                    mirar documentación:
                    http://laravel.com/docs/5.1/migrations#foreign-key-constraints
                 */
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');

                  
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
        Schema::drop('articles');
    }
}
