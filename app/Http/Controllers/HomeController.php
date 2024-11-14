<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Reviews;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * points to home page
     *
     * @return void
     */
    public function home()
    {
        return view('home', [
            'pageInfo' => Home::first(),
        ]);
    }


    /**
     * points to redesigned home page V2
     *
     * @return void
     */
    public function homeV2()
    {
        return view('home-v2', [
            'pageInfo' => Home::first(),
            'reviews' => Reviews::latest()->get(),
        ]);
    }
}
