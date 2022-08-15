<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('saw', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('saw1');
            $table->integer('saw2');
            $table->integer('saw3');
            $table->integer('saw4');
            $table->integer('saw5');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saw');
    }
}
