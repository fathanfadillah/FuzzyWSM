<?php

namespace App\View\Components;

use Illuminate\View\Component;

class dataTables extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $products;
    public function __construct()
    {
        //
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.data-tables');
    }
}