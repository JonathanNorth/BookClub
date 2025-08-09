<?php 

namespace App\View\Components;

use Closure;
use App\Models\Round;
use App\Models\Suggestion;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class JudgeSuggestionsDisplay extends Component
{
    public $suggestions; 
    public $hasRound;
    public $myRound;

    public function __construct(){

        $this->loadSuggestions();
    }


    private function loadSuggestions()
    {
        $userId = Auth::id();

        if(!$userId) {
            $this->suggestions = collect();
            $this->hasRound = false;
            $this->myRound = null;
            return ;
        }
        $myRound = Round::
            where('judge_id', Auth::id())
            ->where('pick_date', '>=', now())
            ->first();

        if(!$myRound) {
            $this->suggestions = collect();
            $this->hasRound = false;
            return ;
        }

        $this->myRound = $myRound;

        $this->suggestions = Suggestion::with('book')
            ->where('round_id', $myRound->id)
            ->get()
            ->pluck('book');
            
        $this->hasRound = true;
    }

    public function render(): View|Closure|string
    {
        return view ('components.judge-suggestions-display');
    }
}