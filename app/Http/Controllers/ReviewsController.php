<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveReviewPage;
use App\Models\Reviews;
use App\Models\ReviewsPage;

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
        ]);

        unset($formFields['passcode']);
        Reviews::create($formFields);
        return redirect('/');
    }
}
