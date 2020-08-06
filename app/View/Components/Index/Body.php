<?php

namespace App\View\Components\Index;

use Illuminate\View\Component;
use App\Models\LandingPageSlider;
use App\Models\LandingPageContent;

class Body extends Component
{
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
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        $imgs = LandingPageSlider::all();
        $data = LandingPageContent::first();
        return view('components.index.body' , ['imgs' => $imgs , 'data' => $data]);
    }
}
