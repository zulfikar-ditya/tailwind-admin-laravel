<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $id;

    public $class;

    public $name;

    public $type;

    public $label;

    public $value;

    public $autocomplete;

    public $required;

    public $autofocus;

    public $disabled;

    public $onchange;

    public $onblur;

    public $onclick;

    public $onkeyup;

    public $readonly;

    public $helpers;

    public function __construct(
        $id = '',
        $class = '',
        $name = '',
        $type = 'text',
        $label = '',
        $value = '',
        $autocomplete = '',
        $required = 0,
        $autofocus = 0,
        $disabled = 0,
        $onchange = '',
        $onclick = '',
        $onblur = '',
        $onkeyup = '',
        $readonly = '',
        $helpers = '',
    ) {
        $this->id = $id;
        $this->class = $class;
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->value = $value;
        $this->autocomplete = $autocomplete;
        $this->required = $required;
        $this->autofocus = $autofocus;
        $this->disabled = $disabled;
        $this->onchange = $onchange;
        $this->onclick = $onclick;
        $this->onkeyup = $onkeyup;
        $this->onblur = $onblur;
        $this->readonly = $readonly;
        $this->helpers = $helpers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
