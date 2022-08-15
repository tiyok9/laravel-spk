<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai', function (Blueprint $table) {
            $table->integer('nilai1')->nullable()->change();
            $table->integer('nilai2')->nullable()->change();
            $table->integer('nilai3')->nullable()->change();
            $table->integer('nilai4')->nullable()->change();
            $table->integer('nilai5')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
