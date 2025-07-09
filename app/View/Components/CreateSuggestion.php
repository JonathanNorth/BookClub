<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CreateSuggestion extends Component
{
    public $suggestions;

    public function __construct($suggestions)
    {
        $this->suggestions = $suggestions;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.create-suggestion');
    }
}
