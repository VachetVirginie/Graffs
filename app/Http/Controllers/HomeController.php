<?php

namespace App\Http\Controllers;
use App\Models\Image;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $images = Image::paginate(config('app.pagination'));

        return view('home', compact('images'));
    }
}
