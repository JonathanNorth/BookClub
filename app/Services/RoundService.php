<?php

namespace App\Services;

use App\Models\Round;
use Illuminate\Support\Facades\Auth;

class RoundService
{

    public function getAllRounds()
    {
        return Round::all()
            ->orderBy('pick_date', 'desc');
    }

    public function getCurrentRound($userID = null)
    {
        $userId = $userId ?? Auth::id();

        $currentRound = Round::where('pick_date', '>=', now())
            ->whereNull('winning_suggestion')
            ->get();
        
        return $currentRound;
    }

    public function getJudgedRounds($userId = null)
    {
        $userId = $userId ?? Auth::id();

        $judgedRounds = Round::where('judge_id', $userId)
            ->whereNotNull('winning_suggestion')
            ->get();
        
        return $judgedRounds;
    }

}
