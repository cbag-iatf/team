<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteModal extends Component
{

    public string $id;

    /**
     * Create a new component instance.
     *
     * @param string $id
     * 
     */
    public function __construct( string $id)
    {
        //
        $this->id = $id;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delete-modal');
    }
}
