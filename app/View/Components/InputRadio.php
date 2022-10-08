<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputRadio extends Component
{
    public $id;

    public $name;

    public $label;

    public $value;

    public $required;

    public $disabled;

    public $checked;

    public $onclick;

    public $onchange;

    public $onblur;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = '', $name = '', $label = '', $value = '', $required = false, $disabled = false, $checked = false, $onclick = '', $onchange = '', $onblur = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->checked = $checked;
        $this->onclick = $onclick;
        $this->onchange = $onchange;
        $this->onblur = $onblur;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-radio');
    }
}
