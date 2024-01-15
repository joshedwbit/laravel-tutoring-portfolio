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
}
