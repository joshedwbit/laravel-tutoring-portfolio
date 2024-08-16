<?php

namespace Database\Seeders;
use App\Models\Home;
use App\Models\Contact;
use App\Models\RecentNews;
use App\Models\LeaveReviewPage;
use App\Models\Reviews;
use App\Models\ReviewsPage;
use App\Models\Resources;
use App\Models\Papers;
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
            'about_copy' => '<p>Maths Masters (MMATH) 2020 graduate from the University of Nottingham.</p><p>Experience tutoring KS3,
            KS4 and First year university maths, all with exceptional results.</p>',
            'aim_copy' => 'Helping students of all levels looking to work hard to achieve desired grades and beyond.',
            'background_copy' => '<p>Hi, my name is Joshua. I currently work as a junior
            implementation engineer and in my free time I tutor mathematics;
            class of 2022/23 will be my third consecutive year one on one Tutoring.</p><p>
            In my experience so far I\'ve found it\'s never mathematical ability
            holding students back, rather a lack of confidence. I aim to adjust teaching
            style accordingly to suit the needs and learning styles of each student, and build
            confidence to inspire a genuine interest in the subject,
            driving a desire to do well.</p>',
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
            'intro' => '<p>Reviews are a great way for me to reach new clients, please detail any highlights
            (or lowlights!)</p><p>All feedback is massively appreciated.</p><p>Thanks, Joshua</p>'
        ]);

        // Reviews::factory(5)->create();
        foreach ($this->getExistingReviews() as $existingReview) {
            Reviews::create($existingReview);
        }

        ReviewsPage::create([
            'intro' => null
        ]);

        Resources::create([
            'title' => 'Resources',
        ]);

        Papers::factory(50)->create();
    }

    /**
     * Returns current reviews from my live site
     *
     * @return array
     */
    public function getExistingReviews(): array
    {
        return [
            [
                'created_at' => '2022-08-26 13:19:59',
                'name' => 'Max',
                'school' => 'Chestnut Grove Academy',
                'year_group' => 'Year 10',
                'predicted' => '4',
                'achieved' => '6',
                'rating' => '5',
                'comments' => 'Josh is an awesome tutor. Max was predicted a 5 , got a 6 and was 2 points off a 7!  Josh has taught 3 of our children. He has inspired them!',
            ],
            [
                'created_at' => '2022-08-26 13:22:10',
                'name' => 'Seb',
                'school' => 'Chestnut Grove Academy',
                'year_group' => 'Year 11',
                'predicted' => '4',
                'achieved' => '6',
                'rating' => '5',
                'comments' => 'Seb had pretty much given up with Maths. We tried a tutor previously and it did not work. We came across Josh and he turned it round. Seb enjoyed the lessons :)',
            ],
            [
                'created_at' => '2022-08-26 18:49:37',
                'name' => 'Lewis',
                'school' => 'Langley School For Boys',
                'year_group' => 'Year 11',
                'predicted' => '4',
                'achieved' => '5',
                'rating' => '5',
                'comments' => 'Amazing help given with very thorough explanations of  the subject . The tutoring  was enough to boost my son\'s confidence and achieve a strong pass and dispel examination worries. An excellent experience for parent and child alike.',
            ],
            [
                'created_at' => '2022-09-26 21:15:41',
                'name' => 'Red',
                'school' => 'Graveney School',
                'year_group' => 'A2',
                'predicted' => 'C',
                'achieved' => 'B',
                'rating' => '5',
                'comments' => 'Josh tutored Red for A-level maths throughout covid.  Despite covid worries, Josh was happy to tutor in person to keep momentum going and was very keen for Red to succeed.  Red was worried throughout his exams but Josh kept his confidence and spirits high, in the end Red was very happy with his grade!',
            ],
            [
                'created_at' => '2022-09-26 21:23:20',
                'name' => 'George',
                'school' => 'Graveney School',
                'year_group' => 'Year 11',
                'predicted' => '6',
                'achieved' => '8',
                'rating' => '5',
                'comments' => 'Josh also tutored Reds brother George throughout his GCSE year.  He worked very hard with George to build his confidence in the subject and bring out his natural ability, he came well prepared and was great at teaching topics that had previously been taught poorly in school - George was extremely happy with his results.',
            ],
            [
                'created_at' => '2022-09-27 17:00:03',
                'name' => 'Stan',
                'school' => 'Graveney School',
                'year_group' => 'A2',
                'predicted' => 'C',
                'achieved' => 'A',
                'rating' => '5',
                'comments' => 'Joshua tutored my son who was working towards A level maths in lockdown. It was a challenging time and my son lacked confidence in his abilities and wasn\'t someone who asked questions comfortably in a classroom setting. His predicted grade was a \'C\' for maths. Joshua helped enormously - his friendly approach was welcomed by my son who relaxed in the tutoring sessions and felt able to ask questions and speak openly about what he found difficult. Joshua was extermely organised and prepared for each session and the content was tailored to my son\'s needs. Joshua was very skilled at challenging my son to think independently and problem solve and this was done at a considered pace. Ultimately the tutoring experience was transformational and my son not only achieved an \'A\' in A Level maths but found an appreciation for the subject and his confidence grew both in maths and beyond.',
            ],
            [
                'created_at' => '2023-08-28 16:08:43',
                'name' => 'Cameron',
                'school' => 'Langley School For Boys',
                'year_group' => 'Year 11',
                'predicted' => '4',
                'achieved' => '6',
                'rating' => '5',
                'comments' => 'My son has always found maths tricky and was clearly not his favourite subject.  With Joshua\'s professional tuition since sitting his mocks my son\'s understanding was transformed . With his confidence boosted he achieved a strong grade 6 and is happily entering Sixth form. Great tutoring and highly recommend for all levels of maths.',
            ]
        ];
    }
}
