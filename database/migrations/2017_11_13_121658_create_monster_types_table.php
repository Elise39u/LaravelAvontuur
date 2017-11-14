<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonsterTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monster_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image_url');
            $table->string('attack');
            $table->string('defense');
            $table->string('curhp');
            $table->string('xp');
            $table->string('gold');
            $table->string('chance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monster_types');
    }
}
