<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputFile extends Component
{
    public $id;

    public $class;

    public $name;

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

    public $multiple;

    public function __construct(
        $id = '',
        $class = '',
        $name = '',
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
        $multiple = 0,
    ) {
        $this->id = $id;
        $this->class = $class;
        $this->name = $name;
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
        $this->multiple = $multiple;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-file');
    }
}
