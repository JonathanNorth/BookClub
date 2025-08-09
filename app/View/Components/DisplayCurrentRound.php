<?php

namespace App\View\Components;

use Closure;
use App\Models\Round;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class DisplayCurrentRound extends Component
{
    
   
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $currentRound = Round::where('pick_date','>=', now())->get();
       
        return view('components.display-current-round', compact('currentRound'));
    }
}
