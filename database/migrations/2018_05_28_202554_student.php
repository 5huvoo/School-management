<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('students',function($table){
   $table->increments($column='student_id',$primary=true);
   $table->Integer($coloumn='student_roll',$auto_increment=false,$unsigned=true);
   $table->string($column='student_name',$length=100);
   $table->string($column='depertment',length='20');
   $table->string($column='blood_group',$length=5);
   $table->string($column='emnail',$length=100);
   $table->string($column='supervisor',$length=100);
  $table-> timestamps();

       })
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
