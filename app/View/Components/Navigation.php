<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class Navigation extends Component
{
    public $categories;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->categories = Category::all();

        return view('components.navigation');
    }
}
