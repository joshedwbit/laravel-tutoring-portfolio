<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveReviewPage;
use App\Models\Reviews;
use App\Models\ReviewsPage;
use Illuminate\Support\Facades\Redis;

class ReviewsController extends Controller
{
    /**
     * Directs to leave a review page
     *
     * @return void
     */
    public function leaveReview()
    {
        return view('leave-a-review', [
            'pageInfo' => LeaveReviewPage::first(),
        ]);
    }

    /**
     * Directs to reviews page
     *
     * @return void
     */
    public function reviews()
    {
        return view('reviews', [
            'pageInfo' => ReviewsPage::first(),
            'reviews' => Reviews::latest()->get(),
        ]);
    }

    /**
     * Handles leave a review form submission
     *
     * @return void
     * @param Request $request
     */
    public function submission(Request $request)
    {
        $reviewPasscode = config('app.review_passcode');

        $formFields = $request->validate([
            'name' => 'nullable|string',
            'school' => 'nullable|string',
            'year_group' => 'required',
            'predicted' => 'required',
            'achieved' => 'required',
            'rating' => 'required|in:1,2,3,4,5',
            'comments' => 'required|min:20|max:1200',
            'passcode' => 'required|in:' . $reviewPasscode,
        ], [
            'passcode.in' => 'The passcode you entered is incorrect. If you have not been given one please contact the site owner.',
            'passcode.required' => 'Please enter the passcode. If you have not been given one please contact the site owner.',
        ]);

        unset($formFields['passcode']);

        $selectedYearGroup = $formFields['year_group'];

        if (str_starts_with($selectedYearGroup, 'year')) {
            $formFields['year_group'] = $selectedYearGroup == 'year-10' ? 'Year 10' : 'Year 11';
        };

        Reviews::create($formFields);
        $request->session()->put('review_submitted', true);
        return redirect('/review-thanks');
    }

    /**
     * directs to thanks view after form submission
     *
     * @return void
     * @param Request $request
     */
    public function thanks(Request $request)
    {
        $hasSubmittedReview = $request->session()->has('review_submitted');

        if ($hasSubmittedReview) {
            $request->session()->forget('review_submitted');
            return view('review-thanks', [
                'pageInfo' => ReviewsPage::first(),
                'review' => Reviews::latest()->first(),
            ]);
        }
        return redirect('/leave-a-review');
    }
}
