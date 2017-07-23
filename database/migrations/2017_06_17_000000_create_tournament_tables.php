<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentTables extends Migration{

    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->increments('tournament_id');
            $table->string('tournament_name');
            $table->unsignedTinyInteger('tournament_type')->nullable(); //change  back when done
            $table->unsignedTinyInteger('tournament_status')->nullable();
            $table->unsignedSmallInteger('team_count')->nullable();
            $table->unsignedSmallInteger('tour_count')->nullable();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->increments('team_id');
            $table->string('team_name');
        });

        Schema::create('games', function (Blueprint $table) {
            $table->increments('game_id');
            $table->unsignedInteger('first_team_id')->nullable();
            $table->unsignedInteger('second_team_id')->nullable();
            $table->unsignedTinyInteger('first_team_score')->nullable();
            $table->unsignedTinyInteger('second_team_score')->nullable();
            $table->unsignedTinyInteger('tour_number');
            $table->unsignedTinyInteger('game_status');
            $table->unsignedInteger('tournament_id');

            $table->foreign('tournament_id')->references('tournament_id')->on('tournaments');
            $table->foreign('first_team_id')->references('team_id')->on('teams');
            $table->foreign('second_team_id')->references('team_id')->on('teams');
        });

        Schema::create('tournament_team_points', function (Blueprint $table) {
            $table->unsignedInteger('tournament_id');
            $table->unsignedInteger('team_id');
            $table->unsignedInteger('team_points')->nullable();

            $table->foreign('tournament_id')->references('tournament_id')->on('tournaments');
            $table->foreign('team_id')->references('team_id')->on('teams');
        });

    }

    public function down()
    {
        Schema::drop('games');
        Schema::drop('teams');
        Schema::drop('tournament_team_points');
        Schema::drop('tournaments');
    }

}