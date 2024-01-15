<?php

namespace Database\Seeders;
use App\Models\Home;
use App\Models\Contact;
use App\Models\RecentNews;
use App\Models\LeaveReviewPage;
use App\Models\LeaveReviewForm;
use App\Models\ReviewsPage;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Home::create([
            'about_copy' => 'Maths Masters (MMATH) 2020 graduate from the University of Nottingham.<br>Experience tutoring KS3,
            KS4 and First year university maths, all with exceptional results.',
            'aim_copy' => 'Helping students of all levels looking to work hard to achieve desired grades and beyond.',
            'background_copy' => 'Hi, my name is Joshua. I currently work as a junior
            implementation engineer and in my free time I tutor mathematics;
            class of 2022/23 will be my third consecutive year one on one Tutoring.<br>
            In my experience so far I\'ve found it\'s never mathematical ability
            holding students back, rather a lack of confidence. I aim to adjust teaching
            style accordingly to suit the needs and learning styles of each student, and build
            confidence to inspire a genuine interest in the subject,
            driving a desire to do well.',
            'approach_copy' => 'My initial approach largely revolves around
            schoolwork - in particular any areas of difficulty/confusion.
            Post-Christmas holidays I\'ll start mixing in past papers until
            a point where the bulk of lessons are past paper focussed -
            this is the best approach in familiarising students with the
            exam paper style.',
        ]);

        Contact::create([
            'title' => 'Contact',
        ]);

        RecentNews::create([
            'title' => 'Recent News',
        ]);

        LeaveReviewPage::create([
            'intro' => 'Reviews are a great way for me to reach new clients, please detail any highlights
            (or lowlights!)<br>All feedback is massively appreciated.<br>Thanks, Joshua'
        ]);

        LeaveReviewForm::factory(5)->create();

        ReviewsPage::create([
            'intro' => null
        ]);
    }
}
