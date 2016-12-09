<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SportData1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        
            create table sportData(
              ID VARCHAR(20),
              
              position varchar(100),
              place varchar(100),
              
              
              PRIMARY KEY (ID),
              foreign key (ID) references data(ID)
              
            
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
            drop table sportData;
        ");
    }
}
