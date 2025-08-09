<?php

namespace App\View\Components;

use Closure;
use App\Models\Round;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DisplayRounds extends Component
{
    public $rounds;

    public function __construct()
    {
        $this->loadRounds();
    }

    private function loadRounds()
    {
        $this->rounds = Round::with(['winningSuggestion.book'])
                            ->orderBy('pick_date', 'desc')
                            ->get();
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.display-rounds');
    }
}
