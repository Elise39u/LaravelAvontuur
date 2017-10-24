<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedialogAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dialog_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dialog_id');
            $table->string('button_title');
            $table->integer('condition')->nullable();
            $table->integer('condition_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dialog_answers');
    }
}