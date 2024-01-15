<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecentNews;

class RecentNewsController extends Controller
{
    /**
     * points to recent news view
     *
     * @return void
     */
    public function news()
    {
        return view('recent-news', [
            'pageInfo' => RecentNews::first(),
        ]);
    }
}
