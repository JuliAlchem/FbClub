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
        Schema::create('players', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            
            $table->string("name");
            $table->unsignedBigInteger("team_id");
            $table->string("position");
            $table->integer("goals");

            $table->foreign("team_id")->references('id')->on('teams')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};
