<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Data1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        
            create table data(
              ID VARCHAR(20),
              durationTo DATE ,
              durationFrom date,
              description varchar(500) not null,
              efort varchar(100),
              specialAcheivement varchar(250),
              activityID varchar(20),
              
              PRIMARY KEY (ID),
              foreign key (activityID) references activity(ID)
              
            
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
            drop table data;
        ");
    }
}
