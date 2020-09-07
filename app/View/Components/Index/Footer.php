<?php

namespace App\View\Components\Index;

use App\Models\FooterSocialLinks;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;
use App\Models\Trailer;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $links;

    public function __construct()
    {
        $this->links = FooterSocialLinks::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.index.footer');
    }

    public function takeFourTopic()
    {

        try {
            return  Trailer::all(['title' , 'slug'])->random(4);

        }catch (\InvalidArgumentException $exception)
        {
            return false;
        }
    }

    public function contact()
    {
        return \App\Models\LandingPageLink::all()->last();
    }

}
