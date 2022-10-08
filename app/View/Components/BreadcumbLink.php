<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadcumbLink extends Component
{
    public $link = '';
    public $active = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link = '#', $active = '')
    {
        $this->link = $link;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcumb-link');
    }
}
