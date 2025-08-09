<?php

namespace App\View\Components;

use Closure;
use App\Models\Round;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class UsersBooks extends Component
{

    public $showSuggestionButton;
    public $myBooks;
    public ?Round $currentRound;
    /**
     * Create a new component instance.
     */
    public function __construct($myBooks, $showSuggestionButton = false)
    {
        $this->myBooks = $myBooks;
        $this->showSuggestionButton = $showSuggestionButton;
        $this->currentRound = Round::where('pick_date', '>=', now())->first();
    
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users-books');
    }


}
