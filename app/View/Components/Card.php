<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $class;
    public $id;
    public $headClass;
    public $headId;
    public $head;
    public $bodyClass;
    public $bodyId;
    public $body;
    public $footerClass;
    public $footerId;
    public $footer;
    public $img;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = '', $id = '', $headClass = '', $headId = '', $head = '', $bodyClass = '', $bodyId = '', $body = '', $footerClass = '', $footerId = '', $footer = '', $img = '', $title = '')
    {
        $this->class = $class;
        $this->id = $id;
        $this->headClass = $headClass;
        $this->headId = $headId;
        $this->head = $head;
        $this->bodyClass = $bodyClass;
        $this->bodyId = $bodyId;
        $this->body = $body;
        $this->footerClass = $footerClass;
        $this->footerId = $footerId;
        $this->footer = $footer;
        $this->img = $img;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
