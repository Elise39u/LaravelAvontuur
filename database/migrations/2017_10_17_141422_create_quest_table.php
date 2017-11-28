<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('npc_id');
            $table->string('name');
            $table->string('description');
            $table->integer('item_reward')->nullable();
            $table->integer('gold');
            $table->string('progress');
            $table->string('reward', 1024)->nullable();
            $table->string('condition')->nullable();
            $table->string('condition_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quests');
    }
}
