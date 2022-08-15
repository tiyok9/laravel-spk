<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normalisasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('norm1');
            $table->integer('norm2');
            $table->integer('norm3');
            $table->integer('norm4');
            $table->integer('norm5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('normalisasis');
    }
}
