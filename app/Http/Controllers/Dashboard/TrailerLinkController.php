<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TrailerLinksRequest;
use App\Models\TrailerLink;
use RealRashid\SweetAlert\Facades\Alert;


class TrailerLinkController extends Controller
{
    public function create($trailer_id)
    {
        return view('dashboard.trailers.trailer-links.create' , ['trailer_id' => $trailer_id]);
    }



    public function store(TrailerLinksRequest $request)
    {

        foreach ($request->title as $index => $item)
        {
            TrailerLink::create([
                'title' => $item,
                'link' => $request->link[$index],
                'trailer_id' => $request->trailer_id
            ]);
        }

        Alert::success(__('تم الاضافة بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect('/');
    }

}
