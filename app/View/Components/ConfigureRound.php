<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ConfigureRound extends Component
{
  
    public $judges;
    /**
     * Create a new component instance.
     */
    public function __construct($judges)
    {
       $this->judges = $judges;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.configure-round');
    }
}
