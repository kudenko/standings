<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class StandingsController extends Controller
{
    public function showTournaments(){
        $tournament = DB::table('tournaments')->get();
        return view('tournaments', ['tournaments' => $tournament]);
    }

    public function create(Request $request){

        $sTournament = $request->input('tournament');
        //var_dump($sTournament);
        DB::table('tournaments')->insert([
            ['tournament_name' => $sTournament]
        ]);
        return redirect()->route('/');
    }
}