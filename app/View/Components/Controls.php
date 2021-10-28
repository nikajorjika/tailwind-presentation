<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Controls extends Component
{
    public $currentSlide;
    public $showPreviousLink;
    public $showNextLink;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $currentSlide)
    {
        $this->currentSlide = $currentSlide;

        $this->showPreviousLink = view()->exists('slides.' . $currentSlide - 1);
        $this->showNextLink = view()->exists('slides.' . $currentSlide + 1);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.controls');
    }
}
