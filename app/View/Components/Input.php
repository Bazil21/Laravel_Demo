<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type, $label, $name, $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$name,$label,$id = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->id = $id;
        //
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
