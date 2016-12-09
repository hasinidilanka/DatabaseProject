<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Login extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        
            create table login(
              ID varchar(10),
              username varchar(50) not null,
              password varchar(20) not null,
              Access int not null,
              unique(username),
              PRIMARY KEY (ID),
              foreign key (ID) references student(ID),
              foreign key (ID) references staff(ID),
              foreign key (ID) references supervisor(ID),
              foreign key (ID) references admin(ID)
              
            
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
            drop table login;
        ");
    }
}
