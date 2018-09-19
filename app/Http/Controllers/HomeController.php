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
        //affichage derniere img en premier
        $images = Image::latestWithUser()->paginate(config('app.pagination'));
        // select * from `images` order by `created_at` desc limit 8 offset 0
        //select * from `users` where `users`.`id` in ('1')
        return view('home', compact('images'));
    }
}
