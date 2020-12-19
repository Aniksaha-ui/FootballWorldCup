<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('match_id')->unique();
            $table->tinyInteger('t_code');
            $table->tinyInteger('goal');
            $table->tinyInteger('t_code1');
            $table->tinyInteger('goal1');
            $table->string('m_date');
            $table->tinyInteger('s_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
