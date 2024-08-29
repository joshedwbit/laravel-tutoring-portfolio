<?php

namespace App\Console\Commands;

use Spatie\Crawler\Crawler;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
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

    /**
     * Handler method
     *
     * @return void
     */
    // public function handle()
    // {
    //     $url = config('app.url');
    //     $this->info('Generating sitemap for URL: ' . $url);
    //     try {
    //         SitemapGenerator::create($url)
    //             // ->configureCrawler(function (Crawler $crawler) {
    //             //     $crawler->setMaximumDepth(3);
    //             // })
    //             ->writeToFile(public_path('sitemap.xml'));

    //         $this->info('Sitemap generated successfully!');
    //     } catch (\Exception $e) {
    //         $this->error('Failed to generate sitemap: ' . $e->getMessage());
    //     }
    // }

    public function handle()
    {
        $sitemap = Sitemap::create();
        // Get all routes from the application
        $routes = Route::getRoutes();
        $this->info('Generating sitemap for URL: ' . config('app.url'));

        try {
            foreach ($routes as $route) {
                // Only include GET routes with URLs
                if ($route->methods()[0] === 'GET' && !empty($route->uri()) && !str_contains($route->uri(), '{')) {
                    $url = url($route->uri());

                    $sitemap->add(Url::create($url)
                        ->setLastModificationDate(now())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setPriority(0.5) // Adjust priority as needed
                    );
                }
            }

            $sitemap->writeToFile(public_path('sitemap.xml'));

            $this->info('Sitemap generated successfully!');
        } catch(\Exception $e) {
            $this->error('Failed to generate sitemap: ' . $e->getMessage());
        }
    }

}
