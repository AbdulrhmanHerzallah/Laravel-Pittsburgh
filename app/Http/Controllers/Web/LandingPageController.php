<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trailer;
use App\Models\Title;
class LandingPageController extends Controller
{
    public function index()
    {
        $trailer = Trailer::where('is_published' , '=' , 1)->first();
        $title = Title::first();

        return view('web.landing-page.index'  , ['trailer' => $trailer , 'title' => $title]);
    }
}
