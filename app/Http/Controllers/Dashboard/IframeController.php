<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\ArabicSlug;
use App\Models\Trailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Iframe;
use Alaouy\Youtube\Facades\Youtube;
use RealRashid\SweetAlert\Facades\Alert;



class IframeController extends Controller
{
    public function create($trailer_id)
    {
        return view('dashboard.topics.topic-iframe.create' , ['trailer_id' => $trailer_id]);
    }


    public function store(Request $request)
    {

        if ($request->type == 'y') {
            try {
                $videoId = Youtube::parseVidFromURL($request->url_id);
            } catch (\Exception $exception) {
                Alert::warning('لا يبود انك قمت بارفاق رابط يوتيوب!');
                return redirect()->back();
            }
        }
        else {
            return redirect()->route('dashboard.gestes.create', ['trailer_id' => $request->trailer_id]);
        }

        Iframe::create(array_merge($request->except(['url_id', 're_submit']), ['url_id' => $videoId ?? null]));
        return redirect()->route('dashboard.gestes.create', ['trailer_id' => $request->trailer_id]);
    }


    public function update(Request $request)
    {

         $iframe = Iframe::where('trailer_id' , $request->id)->first();

        if ($iframe)
        {
            if ($request->url_id) {
                try
                {
                    $videoId = Youtube::parseVidFromURL($request->url_id);
                    $iframe->url_id = $videoId;
                    $iframe->type = 'y';
                    $iframe->iframe = null;
                } catch (\Exception $exception)
                {
                    Alert::warning('لا يبود انك قمت بارفاق رابط يوتيوب!');
                    return redirect()->back();
                }

            }elseif ($request->podcast)
            {
                $iframe->iframe = $request->podcast;
                $iframe->url_id = null;
                $iframe->type = 'p';
            }
            elseif ($request->twitter)
            {
                $iframe->iframe = $request->twitter;
                $iframe->url_id = null;
                $iframe->type = 't';
            }

            $iframe->save();
            Alert::success(__('تم تحديث المرفق بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');

            return redirect()->back();

        }
        else
        {
            $iframe =  new Iframe();
            if ($request->url_id) {
                try
                {
                    $videoId = Youtube::parseVidFromURL($request->url_id);
                    $iframe->url_id = $videoId;
                    $iframe->type = 'y';
                    $iframe->trailer_id = $request->id;
                    $iframe->iframe = null;
                } catch (\Exception $exception)
                {
                    Alert::warning('لا يبود انك قمت بارفاق رابط يوتيوب!');
                    return redirect()->back();
                }

            }elseif ($request->podcast)
            {
                $iframe->iframe = $request->podcast;
                $iframe->url_id = null;
                $iframe->trailer_id = $request->id;

                $iframe->type = 'p';
            }
            elseif ($request->twitter)
            {
                $iframe->iframe = $request->twitter;
                $iframe->url_id = null;
                $iframe->trailer_id = $request->id;

                $iframe->type = 't';
            }

            $iframe->save();
            Alert::success(__('تم تحديث المرفق بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');

            return redirect()->back();


        }
    }


}
