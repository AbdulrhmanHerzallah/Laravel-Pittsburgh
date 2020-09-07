<?php

namespace App\View\Components\Index;

use Illuminate\View\Component;
use App\Models\LandingPageSlider;
use App\Models\LandingPageContent;
use Alaouy\Youtube\Facades\Youtube;
use App\Models\LandingPageVolunteer;
use Illuminate\Support\Facades\DB;

class Body extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $trailer;
    public $title;
    public function __construct($trailer , $title)
    {
        $this->trailer = $trailer;
        $this->title = $title;
    }

//

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {

        $imgs = LandingPageSlider::all();
        $data = LandingPageContent::first();
        try {
            $videoId = Youtube::parseVidFromURL($data->video_url);
        }catch (\ErrorException $e)
        {
            $videoId = null;
        }

        return view('components.index.body' , ['imgs' => $imgs , 'data' => $data , 'video_id' => $videoId]);
    }


    public function volunteer(){
        return LandingPageVolunteer::orderBy('updated_at', 'DESC')->get();

    }




}
