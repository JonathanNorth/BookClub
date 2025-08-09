<?php

namespace App\View\Components;

use id;
use Closure;
use App\Models\Round;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class RoundToJudge extends Component
{

    public $myRounds;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $myRound = Round::where('judge_id', Auth::id())->first();
        return view ('components.round-to-judge', compact('myRound'));

    }
}
