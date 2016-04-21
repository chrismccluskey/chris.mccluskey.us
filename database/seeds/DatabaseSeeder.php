<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_categories')->insert([
            'id' => 1,
            'title' => 'Browser Extensions',
            'slug' => 'browser-extensions'
        ]);
        DB::table('project_categories')->insert([
            'id' => 2,
            'title' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);
        DB::table('project_categories')->insert([
            'id' => 3,
            'title' => 'Site Analysis & Reporting',
            'slug' => 'site-analysis-and-reporting'
        ]);
        DB::table('project_categories')->insert([
            'id' => 4,
            'title' => 'Site Content Auditing & Authoring',
            'slug' => 'site-content-authoring-and-auditing'
        ]);
        DB::table('project_categories')->insert([
            'id' => 5,
            'title' => 'Team Development Environments',
            'slug' => 'team-development-environments'
        ]);
        DB::table('project_categories')->insert([
            'id' => 6,
            'title' => 'Video Websites',
            'slug' => 'video-websites'
        ]);
        DB::table('project_categories')->insert([
            'id' => 7,
            'title' => 'Web Analytics & Client Portals',
            'slug' => 'web-analytics-and-client-portals'
        ]);
        DB::table('project_categories')->insert([
            'id' => 8,
            'title' => 'Web Crawling',
            'slug' => 'web-crawling'
        ]);
        DB::table('project_categories')->insert([
            'id' => 9,
            'title' => 'Web Proxies',
            'slug' => 'web-proxies'
        ]);
        DB::table('project_categories')->insert([
            'id' => 10,
            'title' => 'Web Toys & Experiments',
            'slug' => 'web-toys-and-experiments'
        ]);




        DB::table('projects')->insert([
            'title' => 'MESH',
            'image_filename' => '/img/mesh.png',
            'description' => 'MESH was a chrome extension which allowed users to selectively block ads from brands / companies they disliked while allowing ads from brands they loved.',
            'category_id' => 1
        ]);
        DB::table('projects')->insert([
            'title' => 'Gumby',
            'image_filename' => '/img/gumby.jpg',
            'description' => 'Project gumby was a Python-based backend application which used Natural Language Processing techniques to categorize blocks of text automatically.',
            'category_id' => 2
        ]);
        DB::table('projects')->insert([
            'title' => 'Data Reporting Engine',
            'image_filename' => '/img/dre.png',
            'description' => 'The data reporting engine was responsible for capturing data from a variety of different sources and reporting it to clients, employees and to other external services. The engine was designed to be flexible in order to specifically cater to changing business needs.',
            'category_id' => 3
        ]);
        DB::table('projects')->insert([
            'title' => 'The Content Tool',
            'image_filename' => '/img/content-tool.png',
            'description' => 'The Content Tool was designed to assist employees with site planning and content strategy efforts for clients. The tool worked in conjunction with other projects (Gumby and Hogna) to crawl, analyze, catalog, and edit / author site content. The tool also contained versioning, device emulation (with screenshots at different resolutions) and project planning features.',
            'category_id' => 4
        ]);
        DB::table('projects')->insert([
            'title' => 'DevStack',
            'image_filename' => '/img/devstack.png',
            'description' => 'Powered by vagrant and salt stack, DevStack was an internal tool used to mimic our production environment to other developers who were not used to working on their own copy of the code. It came with a web interface that let devs choose technologies needed for each project which were later saved to a JSON file that lived with the source code.',
            'category_id' => 5
        ]);
        DB::table('projects')->insert([
            'title' => 'Curative Groove',
            'link' => 'http://www.curativegroove.com/',
            'image_filename' => '/img/curativegroove.png',
            'description' => 'Chalaina is a therapist who wanted to speak directly to her site visitors via an interactive video tour of her private practice.',
            'category_id' => 6
        ]);
        DB::table('projects')->insert([
            'title' => 'EngineRoom',
            'image_filename' => '/img/dashboard.png',
            'description' => 'Before Google Analytics was released, EngineRoom reported web analytics information to its clients in a simple manner. EngineRoom performed its own tracking and analysis by way of embedded JavaScript and a proxy for paid advertising campaigns. Clients were able to speak directly to account representatives via the web interface.',
            'category_id' => 7
        ]);
        DB::table('projects')->insert([
            'title' => 'Hogna',
            'image_filename' => '/img/hogna.jpg',
            'description' => 'A versatile web crawler used for the analysis and tracking of client site content.',
            'category_id' => 8
        ]);
        DB::table('projects')->insert([
            'title' => 'Naga',
            'image_filename' => '/img/naga.jpg',
            'description' => 'An anonymizing HTTP proxy with IP rotating capabilities.',
            'category_id' => 9
        ]);
        DB::table('projects')->insert([
            'title' => 'Rainbo.ws',
            'link' => 'http://rainbo.ws',
            'image_filename' => '/img/rainbows.png',
            'description' => 'I enjoy playing around with new technologies. While playing around with drawing on canvas with JavaScript, I created this little web toy.',
            'category_id' => 10
        ]);
    }
}
