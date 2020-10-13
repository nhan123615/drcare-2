<?php

namespace App\View\Components;

use App\Models\Disease;
use Illuminate\View\Component;

class TotalDiseases extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $totalDiseases;
    public function __construct()
    {
        $this->totalDiseases = Disease::count();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.total-diseases');
    }
}
