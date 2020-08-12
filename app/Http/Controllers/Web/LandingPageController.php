<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trailer;

class LandingPageController extends Controller
{
    public function index()
    {
        $trailer = Trailer::where('is_published' , '=' , 1)->first();
        return view('web.landing-page.index' , ['trailer' => $trailer]);
    }
}
