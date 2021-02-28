<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Table extends Component
{
    public $id;
    public $headers;
    public $rows;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $headers, $rows)
    {
        $this->id = $id;
        $this->headers = $headers;
        $this->rows = $rows;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.admin.table');
    }
}
