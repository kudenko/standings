<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TournamentSeeder extends Seeder{

    public function run(){
        DB::table('tournaments')->insert([

            'title' => 'тест',

        ]);

    }

}