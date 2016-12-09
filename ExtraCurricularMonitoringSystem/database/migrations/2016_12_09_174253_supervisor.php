<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Supervisor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            DB::statement("
        
            create table supervisor(
              ID varchar(10),
              name varchar(40),
              email varchar(50),
              PRIMARY KEY (ID)
              
            
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
            drop table supervisor;
        ");
    }
}
