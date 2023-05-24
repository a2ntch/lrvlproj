<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cards extends Component
{
    public $title;
    public $amount;
    public $donator;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $amount, $donator) 
    {
        $this->title = $title;
        $this->amount = $amount;
        $this->donator = $donator;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards');
    }
}
