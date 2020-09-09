<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeroomTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeroom_teacher', function (Blueprint $table) {
            $table->increments('id_homeroom_teacher');
            
            $table->foreignId('id_teacher');
            $table->foreign('id_teacher')->references('id')->on('users');

            $table->foreignId('class_id');
            $table->foreign('class_id')->references('class_id')->on('classes');

            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homeroom_teacher');
    }
}
