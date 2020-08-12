<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GesteModel;
use App\Http\Requests\GesteRequest;

class GuestController extends Controller
{
    public function create($trailer_id)
    {
        return view('dashboard.guests.create' , ['trailer_id' => $trailer_id]);
    }

    public function store(GesteRequest $request)
    {

        foreach ($request->name as $index => $item)
        {
            GesteModel::create
          ([
            'name' => $item,
            'twitter' => $request->twitter[$index],
            'facebook' => $request->facebook[$index],
            'instagram'=> $request->nstagram[$index],
            'snapchat' => $request->snapchat[$index],
            'desc' => $request->desc[$index],
            'web' => $request->web[$index],
            'trailer_id' => $request->trailer_id,
            'main' => $request->main[$index] ?? 0
          ]);



        }

    }
}
