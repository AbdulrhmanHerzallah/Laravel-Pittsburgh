<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function create()
    {
        return view('dashboard.contact.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'title' => 'required',
        ]);
        DB::table('landing_page_links')->insert($request->except('_token'));
        return redirect()->back();
    }




}
