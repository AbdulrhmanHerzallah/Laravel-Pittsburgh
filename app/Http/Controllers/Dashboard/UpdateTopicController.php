<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\GesteModel;
use App\Models\Image;
use App\Models\TrailerLink;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Trailer;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\GesteRequest;


class UpdateTopicController extends Controller
{

    public function indexLinks($id)
    {
        return view('dashboard.update-topic.links' , ['id' => $id]);
    }


    public function indexGuests($id)
    {
        return view('dashboard.update-topic.guests' , ['id' => $id]);

    }

    public function indexImg($id)
    {
        return view('dashboard.update-topic.imgs' , ['id' => $id]);

    }

    public function updateLinks(Request $request)
    {
        Trailer::find($request->trailer_id)->links()->delete();


        foreach ($request->title as $index => $item)
        {
            TrailerLink::create([
                'title' => $item,
                'link' => $request->link[$index],
                'trailer_id' => $request->trailer_id
            ]);
        }

        Alert::success(__('تم تحديث الروابط بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();
    }

    public function updateImg(Request $request)
    {
        $request->validate([
            'img.*' => 'required|image'
        ]);
        Trailer::find($request->trailer_id)->images()->delete();
        try {
            foreach ($request->file('img') as $i)
            {
                $fileName = Carbon::now()->timestamp.'_'.$i->getClientOriginalName();
                $i->move(public_path('img') , $fileName);
                Image::create(['img' => '/img/'.$fileName , 'trailer_id' => $request->trailer_id]);
            }
        }catch (\ErrorException $exception)
        {
            Alert::warning('لم تقم بارفاق صور!');
            return redirect()->back();
        }

        Alert::success('تم تحديث الصور بنجاح !');
        return redirect()->back();

    }

    public function updateGuests(GesteRequest $request)
    {
        Trailer::find($request->trailer_id)->gestes()->delete();

        foreach ($request->name as $index => $item) {
            if ($request->hasFile('file.' . $index)) {

                $timestamp = Carbon::now()->timestamp;
                $fileName = $request->file('file.'.$index)->getClientOriginalName();
                $path = '/guests/'.$timestamp.'_'.$fileName;
                \Intervention\Image\Facades\Image::make($request->file('file.'.$index)->path())
                    ->resize(400, 400 , function ($constraint){
                        $constraint->aspectRatio();
                    })
                    ->save(public_path($path));

            }
            GesteModel::create
            ([
                'name' => $item,
                'twitter' => $request->twitter[$index],
                'facebook' => $request->facebook[$index],
                'instagram'=> $request->instagram[$index],
                'snapchat' => $request->snapchat[$index],
                'desc' => $request->desc[$index],
                'web' => $request->web[$index],
                'trailer_id' => $request->trailer_id,
                'main' => $request->main[$index] ?? 0,
                'img_url' => $path ?? null
            ]);

        }
        Alert::success('تم تديث صور الضيوف بنجاح !');
        return redirect()->back();


    }


}
