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
     * points to redesigned home page
     *
     * @return void
     */
    public function newHome()
    {
        return view('new-home', [
            'pageInfo' => Home::first(),
        ]);
    }
}
