<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DisplayRounds extends Component
{
    public $rounds;

    public function __construct($rounds)
    {
        $this->rounds = $rounds;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.display-rounds');
    }
}
