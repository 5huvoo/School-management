<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Teacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers',function($table){

       $table->increments($column='teacher_idd',$primary=true);
       $table->string($column='teacher_name',$length=100);
       $table->string($column='designation',$length=15);
       $table->string($coloumn='thesis_students',$length=100);
       $table->Integer($column='age',$auto_increment=false,$unsigned=true );
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
        Schema::drop('teachers');
    }
}
