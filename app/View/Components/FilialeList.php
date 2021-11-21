<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FilialeList extends Component
{
    public $filiales;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($filiales)
    {
        $this->filiales = $filiales;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.filiale-list',['filiale'=>$this->filiales]);
    }
}
