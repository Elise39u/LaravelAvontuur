<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNpcdialougTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('npcdialoug', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('npc_id');
            $table->integer('story_number');
            $table->string('Answer_1');
            $table->string('Answer_2');
            $table->string('Answer_3');
            $table->integer('next_story_number');
            $table->integer('need_npc_to_talk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('npcdialoug');
    }
}
