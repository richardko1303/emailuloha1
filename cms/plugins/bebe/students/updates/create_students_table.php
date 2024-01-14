<?php namespace Bebe\Students\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('bebe_students_students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->integer('age');
            $table->integer('grade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bebe_students_students');
    }
}
