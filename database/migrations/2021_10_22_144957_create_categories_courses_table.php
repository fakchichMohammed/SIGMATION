<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_courses', function (Blueprint $table) {
            $table->unsignedBigInteger('course')->index();
            $table->unsignedBigInteger('category')->index();
            $table->foreign('course')->references('id')->on('courses');
            $table->foreign('category')->references('id')->on('categories');
            $table->primary(['course','category']);
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_courses');
    }
}
