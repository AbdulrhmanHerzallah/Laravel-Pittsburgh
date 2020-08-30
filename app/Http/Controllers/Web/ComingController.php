<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guide;

class ComingController extends Controller
{
    public function index()
    {
        $guide = Guide::all()->last();
        return view('web.coming.index' , ['guide' => $guide]);
    }
}
