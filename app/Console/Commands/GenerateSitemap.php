<?php

namespace App\Console\Commands;

use Spatie\Crawler\Crawler;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

// use App\Models\a-posts-model

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically generate an XML sitemap';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Handler method
     *
     * @return void
     */
    public function handle()
    {
        $url = config('app.url');
        $this->info('Generating sitemap for URL: ' . $url);
        try {
            SitemapGenerator::create($url)
                // ->configureCrawler(function (Crawler $crawler) {
                //     $crawler->setMaximumDepth(3);
                // })
                ->writeToFile(public_path('sitemap.xml'));

            $this->info('Sitemap generated successfully!');
        } catch (\Exception $e) {
            $this->error('Failed to generate sitemap: ' . $e->getMessage());
        }
    }

}
