<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoolController extends Controller
{
    public function home()
    {
        return view('perblad.index');
    }

    public function about()
    {
        return view('perblad.about');
    }

    public function services()
    {
        return view('perblad.services');
    }

    public function pricing()
    {
        return view('perblad.pricing');
    }

    public function faq()
    {
        return view('perblad.faq');
    }

    public function contact()
    {
        return view('perblad.contact');
    }

    public function contact_data(Request $request)
    {
        // $data = $request->except('phone');
        $data = $request->phone;
        // $data = $request->all();

        dd($data);
    }
}
