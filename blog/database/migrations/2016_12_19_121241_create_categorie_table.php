<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_blog');
            $table->string('name');
            $table->timestamps();

            $table->foreign('id_blog')->references('id')->on('blog')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categorie');
    }
}
