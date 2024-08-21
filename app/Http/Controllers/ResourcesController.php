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
     * @param Request $request
     */
    public function submission(Request $request)
    {
        $formFields = $request->validate([
            'year' => 'required|digits:4|integer|min:2000|max:' . date('Y'),
            'paper_number' => 'required|in:1,2,3',
            'season' => 'required|string|in:Winter,Summer',
            'type' => 'required|string|in:Calculator,Non-calculator',
            'level' => 'required|string|in:Foundation,Higher',
            'question_number' => 'required|integer|min:1|max:25',
            'topic' => 'required|string',
        ]);

        $formFields['higher'] = $formFields['level'] == 'Higher' ? 1 : 0;
        $formFields['calculator'] = $formFields['type'] == 'Calculator' ? 1 : 0;

        Papers::create($formFields);
        return redirect('/resources');
    }

    public function editResource(Papers $paper)
    {
        if (!auth()->check()) {
            return redirect('/resources');
        }

        return view('edit-resource', [
            'resource' => $paper
        ]);
    }

    public function updateResource(Papers $paper, Request $request)
    {
        if (!auth()->check()) {
            return redirect('/resources');
        }
        // todo put this into its own method, possibly a trait/interface

        $formFields = $request->validate([
            'year' => 'required|digits:4|integer|min:2000|max:' . date('Y'),
            'paper_number' => 'required|in:1,2,3',
            'season' => 'required|string|in:Winter,Summer',
            'type' => 'required|string|in:Non-calculator,Calculator',
            'level' => 'required|string|in:Foundation,Higher',
            'question_number' => 'required|integer|min:1|max:25',
            'topic' => 'required|string',
        ]);
        // todo put form validation in new method since its reused

        $formFields['higher'] = $formFields['level'] == 'Higher' ? 1 : 0;
        $formFields['calculator'] = $formFields['type'] == 'Calculator' ? 1 : 0;

        $paper->update($formFields);
        return redirect('/resources');
    }
}
