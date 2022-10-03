<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $class;

    public $link;

    public $badge;

    public $type;

    public $color;

    public $textColor;

    public $outline;

    public $shadow;

    public $rounded;

    public $block;

    public $style;

    public $soft;

    public $size;

    public $icon;

    public $fontawesome;

    public $styleIcon;

    public $label;

    public $dataToggle;

    public $dataTarget;

    public $dataDismiss;

    public $disabled;

    public $gradient;

    public $id;

    public $onchange;

    public $onclick;

    public $iconRight;

    public $target = '';

    public function __construct(
        $class = '',
        $link = '',
        $id = '',
        $badge = 0,
        $type = '',
        $color = '',
        $textColor = '',
        $outline = 0,
        $shadow = 0,
        $rounded = 0,
        $block = 0,
        $soft = 0,
        $size = 'md',
        $icon = '',
        $style = 'default',
        $fontawesome = 0,
        $styleIcon = 'fa-solid',
        $label = '',
        $dataToggle = 0,
        $dataTarget = 0,
        $dataDismiss = 0,
        $disabled = 0,
        $onchange = '',
        $onclick = '',
        $gradient = '',
        $iconRight = '',
        $target = ''
    ) {
        $this->class = $class;
        $this->link = $link;
        $this->badge = $badge;
        $this->type = $type;
        $this->color = $color;
        $this->textColor = $textColor;
        $this->outline = $outline;
        $this->shadow = $shadow;
        $this->rounded = $rounded;
        $this->block = $block;
        $this->soft = $soft;
        $this->size = $size;
        $this->icon = $icon;
        $this->style = $style;
        $this->fontawesome = $fontawesome;
        $this->styleIcon = $styleIcon;
        $this->label = $label;
        $this->dataToggle = $dataToggle;
        $this->dataTarget = $dataTarget;
        $this->dataDismiss = $dataDismiss;
        $this->disabled = $disabled;
        $this->onchane = $onchange;
        $this->onclick = $onclick;
        $this->id = $id;
        $this->gradient = $gradient;
        $this->iconRight = $iconRight;
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
