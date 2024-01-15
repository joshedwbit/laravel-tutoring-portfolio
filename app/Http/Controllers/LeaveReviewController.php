<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveReviewPage;

class LeaveReviewController extends Controller
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
}
