<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savings', function (Blueprint $table) {
            $table->increments('id_saving');

            $table->foreignId('class_id');
            $table->foreign('class_id')->references('class_id')->on('classes');

            $table->foreignId('id_teacher');
            $table->foreign('id_teacher')->references('id_teacher')->on('homeroom_teacher'); 
            
            $table->foreignId('id_student');
            $table->foreign('id_student')->references('id_student')->on('students');
            
           
            $table->string('nominal');
            $table->string('status');
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
        Schema::dropIfExists('savings');
    }
}
