<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


class EmailController extends Controller
{
    public function store(Request $request)
    {
         Mail::to(env('MAIL_FROM_ADDRESS'))->send(new \App\Mail\MessageMail($request->all()));
        alert()->success('تم ارسالة الرسالة بنجاح' , 'شكراََ لتواصلك معنا');
         return redirect()->back();
    }
}
