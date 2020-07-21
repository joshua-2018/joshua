<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('process_id');
            $table->foreign('process_id')->references('id')->on('processes');
            $table->timestamps();
        });/*
        DB::table('process_user')->insert(array('id'=>'1','user_id'=>1,'process_id'=>1));
        DB::table('process_user')->insert(array('id'=>'2','user_id'=>2,'process_id'=>3));
        DB::table('process_user')->insert(array('id'=>'3','user_id'=>2,'process_id'=>4));
        DB::table('process_user')->insert(array('id'=>'4','user_id'=>3,'process_id'=>5));
        DB::table('process_user')->insert(array('id'=>'5','user_id'=>3,'process_id'=>7));
        DB::table('process_user')->insert(array('id'=>'6','user_id'=>3,'process_id'=>8));*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('process_user');
    }


}
