<?php

namespace Database\Seeders;
use App\Models\Topics;
use App\Traits\TopicsTrait;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    use TopicsTrait;

    /**
     * Seed the topics listed in TopicsTrait
     * @return void
     */
    public function run(): void
    {
        foreach (TopicSeeder::getTopics() as $topic) {
            Topics::create([
                'topic' => $topic
            ]);
        }
    }
}
