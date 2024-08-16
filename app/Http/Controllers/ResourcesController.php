<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources;
use App\Models\Papers;

class ResourcesController extends Controller
{
    /**
     * points to resources view
     *
     * @return void
     */
    public function resources()
    {
        return view('resources', [
            'pageInfo' => Resources::first(),
            'papers' => Papers::orderBy('year', 'desc')->get(),
        ]);
    }
}
