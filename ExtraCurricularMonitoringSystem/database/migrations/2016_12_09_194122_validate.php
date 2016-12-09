<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Validate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        
            create table validate(
              supervisorID VARCHAR(10),
              DataID varchar(20),
              isChecked int,
              isvalidated int,
              
             
              
              PRIMARY KEY (supervisorID,DataID),
              foreign key (supervisorID) references supervisor(ID),
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
            drop table validate;
        ");
    }
}
