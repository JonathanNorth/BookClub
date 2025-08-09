<?php

namespace App\View\Components;

use Closure;
use App\Models\Round;
use App\Models\Suggestion;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class JudgeDisplay extends Component
{

    public $suggestions;
    public $myRound;
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

        return view ('components.judge-display');

    }
}
