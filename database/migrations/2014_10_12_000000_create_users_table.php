<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('current_location_id')->nullable();
            $table->string('inventory_id')->nullable();

            //Stats for the player
            $table->string('attack')->default(50);
            $table->string('magical_attack')->default(10);
            $table->string('defense')->default(80);
            $table->string('gold')->default(250);
            $table->string('inbank')->default(500);
            $table->string('curhp')->default(200);
            $table->string('maxhp')->default(250);
            $table->string('current_exp')->default(0);
            $table->string('exp_needed_to_next_level')->default(250);
            $table->string('level')->default(1);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
