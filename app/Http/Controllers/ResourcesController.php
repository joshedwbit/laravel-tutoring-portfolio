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

    /**
     * Handles resources form submission
     *
     * @return void
     */
    public function submission(Request $request)
    {
        $formFields = $request->validate([
            'year' => 'required|digits:4|integer|min:2000|max:' . date('Y'),
            'paper_number' => 'required|in:1,2,3',
            'season' => 'required|string|in:winter,summer',
            'type' => 'required|string|in:calculator,non-calculator',
            'level' => 'required|string|in:foundation,higher',
            'question_number' => 'required|integer|min:1|max:25',
            'topic' => 'required|string',
        ]);

        $formFields['season'] = $formFields['season'] == 'summer' ? 'Summer' : 'Winter';
        $formFields['higher'] = $formFields['level'] == 'higher' ? 1 : 0;
        $formFields['calculator'] = $formFields['type'] == 'calculator' ? 1 : 0;

        Papers::create($formFields);
        return redirect('/resources');
    }
}
