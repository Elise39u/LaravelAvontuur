<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlayerQuest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_quests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quest_id');
            $table->string('player_id');
            $table->string('status')->default('unknown');
            $table->string('effect')->nullable();
            $table->string('tasks');
            $table->string('category')->nullable();
            $table->string('fail_behavior')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_quests');
    }
}
