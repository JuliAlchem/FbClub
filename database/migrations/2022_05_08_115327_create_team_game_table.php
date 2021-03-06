<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_game', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger("team_id");
            $table->unsignedBigInteger("game_id");

            $table->foreign("team_id")->references('id')->on('teams')->onDelete('cascade');
            $table->foreign("game_id")->references('id')->on('games')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_game');
    }
};
