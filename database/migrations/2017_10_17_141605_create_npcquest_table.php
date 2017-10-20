<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNpcquestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('npcquests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('npc_id');
            $table->integer('quest_id');
            $table->integer('check_item_reward');
            $table->integer('need_other_quest_done');
            $table->string('reward', 1024);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('npcquests');
    }
}
