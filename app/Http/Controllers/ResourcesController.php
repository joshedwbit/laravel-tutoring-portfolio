<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources;
use App\Models\Papers;
use App\Models\Topics;
use App\Traits\TopicsTrait;

class ResourcesController extends Controller
{
    use TopicsTrait;

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
            'results_count' => count(Papers::all()),
            'topics' => Topics::all(),
        ]);
    }

    /**
     * points to redesigned resources page V2
     *
     * @return void
     */
    public function resourcesV2()
    {
        return view('resources-v2', [
            'pageInfo' => Resources::first(),
            'papers' => Papers::orderBy('year', 'desc')->simplePaginate(10),
            'results_count' => Papers::count(),
            'topics' => Topics::all(),
            'filtered' => false,
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
        $formFields = $this->validateResourceFields($request);

        Papers::create($formFields);
        return redirect('/resources');
    }

    /**
     * Points to edit view on a resource if logged in
     *
     * @param Papers $paper
     * @return void
     */
    public function editResource(Papers $paper)
    {
        if (!auth()->check()) {
            return redirect('/resources');
        }

        return view('edit-resource', [
            'resource' => $paper,
            'topics' => Topics::all(),
        ]);
    }

    /**
     * Updates the resource if logged in
     *
     * @param Papers $paper
     * @param Request $request
     * @return void
     */
    public function updateResource(Papers $paper, Request $request)
    {
        if (auth()->check()) {
            $formFields = $this->validateResourceFields($request);

            $paper->update($formFields);
        }

        return redirect('/resources');
    }

    /**
     * Deletes the resource if logged in
     *
     * @param Papers $paper
     * @return void
     */
    public function deleteResource(Papers $paper)
    {
        if (auth()->check()) {
            $paper->delete();
        }

        return redirect('/resources');
    }

    public function filter(Request $request)
    {
        $request->validate([
            'filter_year' => 'nullable|digits:4|integer|min:2000|max:' . date('Y'),
            'filter_paper_number' => 'nullable|array',
            'filter_paper_number*' => 'string|in:1,2,3',
            'filter_season' => 'nullable|array',
            'filter_season*' => 'string|in:Winter,Summer',
            'filter_type' => 'nullable|array',
            'filter_type*' => 'string|in:0 ,1',
            'filter_level' => 'nullable|array',
            'filter_level*' => 'string|in:0,1',
            'filter_topic' => 'nullable|string|in:' . ResourcesController::getTopicsString(),
        ]);

        $query = Papers::query();

        if ($request['filter_year']) {
            $query->where('year', $request['filter_year']);
        }

        if ($request['filter_paper_number']) {
                $query->whereIn('paper_number', $request['filter_paper_number']);
        }

        if ($request['filter_season']) {
            $query->whereIn('season', $request['filter_season']);
        }

        if ($request['filter_type']) {
            $query->whereIn('calculator', $request['filter_type']);
        }

        if ($request['filter_level']) {
            $query->whereIn('higher', $request['filter_level']);
        }

        if ($request['filter_topic']) {
            $query->where('topic', $request['filter_topic']);
        }

        $query->orderBy('year', 'desc');

        // dd($query->toSql(), $query->getBindings());
        // total must be calculated before filtering so the order below is important
        $filteredResourcesTotal = count($query->get());
        $filteredResources = $query->simplePaginate(10)->withQueryString();

        return view('resources-v2', [
            'pageInfo' => Resources::first(),
            'papers' => $filteredResources,
            'results_count' => $filteredResourcesTotal,
            'topics' => Topics::all(),
            'filtered' => true,
        ]);
    }

    /**
     * Validate fields in submitted/updated resource
     *
     * @param Request $request
     * @return array
     */
    public function validateResourceFields(Request $request)
    {
        $submittedFields = $request->validate([
            'year' => 'required|digits:4|integer|min:2000|max:' . date('Y'),
            'paper_number' => 'required|in:1,2,3',
            'season' => 'required|string|in:Winter,Summer',
            'type' => 'required|string|in:0,1',
            'level' => 'required|string|in:0,1',
            'question_number' => 'required|integer|min:1|max:30',
            'topic' => 'required|string|in:' . ResourcesController::getTopicsString(),
            'notes' => 'nullable|string|max:100',
        ]);

        $submittedFields['higher'] = $submittedFields['level'];
        $submittedFields['calculator'] = $submittedFields['type'];

        return $submittedFields;
    }
}
