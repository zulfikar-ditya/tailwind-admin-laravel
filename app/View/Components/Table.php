<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $color = '';

    public $caption = '';

    public $head = '';

    public $body = '';

    public $footer = '';

    public $id = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'primary', $caption = '', $head = '', $body = '', $footer = '', $id = '')
    {
        $this->color = $color;
        $this->caption = $caption;
        $this->head = $head;
        $this->body = $body;
        $this->footer = $footer;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}
