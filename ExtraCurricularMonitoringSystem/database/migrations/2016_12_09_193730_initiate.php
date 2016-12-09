<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Initiate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        
            create table initiate(
              studentID VARCHAR(10),
              DataID varchar(20),
              
             
              
              PRIMARY KEY (studentID,DataID),
              foreign key (studentID) references student(ID),
              foreign key (dataID) references data(ID)
              
            
            )Engine InnoDB;
        
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(
            "
            drop table initiate;
        ");
    }
}
