<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FoodCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $food ;

    public function __construct($food)
    {
        //
        $this->food = $food ;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.food-card');
    }
}
