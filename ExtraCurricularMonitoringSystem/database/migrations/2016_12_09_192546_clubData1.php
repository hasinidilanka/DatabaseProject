<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClubData1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        
            create table clubData(
              ID VARCHAR(20),
              
              position varchar(100),
              project varchar(100),
              
              
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
            drop table clubData;
        ");
    }
}
