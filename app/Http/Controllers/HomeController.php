<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

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
    public function HomeV2()
    {
        return view('home-v2', [
            'pageInfo' => Home::first(),
        ]);
    }
}
