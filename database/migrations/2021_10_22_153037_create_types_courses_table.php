<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types_courses', function (Blueprint $table) {
            $table->unsignedBigInteger('course')->index();
            $table->unsignedBigInteger('type')->index();
            $table->foreign('course')->references('id')->on('courses');
            $table->foreign('type')->references('id')->on('types');
            $table->primary(['course','type']);
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
        Schema::dropIfExists('types_courses');
    }
}
