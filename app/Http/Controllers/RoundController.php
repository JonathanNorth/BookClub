<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Round;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RoundController extends Controller
{


    public function create(){

        $judges = User::all();
        return view('create-round', compact('judges'));
    }



    public function storeRound(Request $request){
        $incomingFields = $request->validate([
            'judge_id' => 'required',
            'genre' => 'required',
            'pick_date' => 'required'
        ]);
        
        
        $incomingFields['judge_id']=strip_tags($incomingFields['judge_id']);
        $incomingFields['genre']=strip_tags($incomingFields['genre']);
        $incomingFields['pick_date']=strip_tags($incomingFields['pick_date']);

        
        
        $round = new Round();
        $round->judge_id= $incomingFields['judge_id'];
        $round->genre = $incomingFields['genre'];
        $round->pick_date = $incomingFields['pick_date'];
        $maxRoundNumber = DB::table('rounds')->max('round_number');
        $round->round_number = $maxRoundNumber ? $maxRoundNumber + 1 : 1;
        $round->save();

        return redirect('dashboard');

        
    }
}
