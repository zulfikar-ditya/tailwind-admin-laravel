<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputToggle extends Component
{
    public $id;

    public $name;

    public $label;

    public $value;

    public $class;

    public $toggleClass;

    public $color;

    public $required;

    public $disabled;

    public $checked;

    public $onclick;

    public $onchange;

    public $onblur;

    public $helpers;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = '', $name = '', $label = '', $value = '', $required = false, $disabled = false, $checked = false, $color = 'primary', $onclick = '', $onchange = '', $onblur = '', $helpers = '', $class = '', $toggleClass = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->checked = $checked;
        $this->color = $color;
        $this->onclick = $onclick;
        $this->onchange = $onchange;
        $this->onblur = $onblur;
        $this->helpers = $helpers;
        $this->class = $class;
        $this->toggleClass = $toggleClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-toggle');
    }
}
