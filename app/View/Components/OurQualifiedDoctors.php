<?php

namespace App\View\Components;

use App\Models\Doctor;
use Illuminate\View\Component;

class OurQualifiedDoctors extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $doctors;
    public function __construct()
    {
        $this->doctors = Doctor::all()->take(4);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.our-qualified-doctors');
    }
}
