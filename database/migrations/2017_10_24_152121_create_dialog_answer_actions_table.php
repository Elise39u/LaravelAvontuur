<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDialogAnswerActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dialog_answer_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dialog_answer_id');
            $table->string('action')->nullable();           // GIVE_ITEM_AND_CLOSE    CLOSE_DIALOG    OPEN_DIALOG
            $table->string('action_value')->nullable();     // 1                      -               45
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
        Schema::dropIfExists('dialog_answer_actions');
    }
}
