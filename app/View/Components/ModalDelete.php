<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalDelete extends Component
{
    public $target = '';

    public $title = '';

    public $description = '';

    public $link = '';

    public $placement = '';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($target = '', $title = 'Are you sure to delete this data?', $description = 'This action can\'t be un done!!!!', $link = '', $placement = '')
    {
        $this->target = $target;
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
        $this->placement = $placement;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-delete');
    }
}
