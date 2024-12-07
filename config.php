<?php

return [
    # Custom routes
    'routes' => [
        
        // Setup the rss feed
        [
            'pattern'   => ['/feed'],
            'action'    => function () {

                $title          = "Your Blog Name";
                $description    = "Your Blog Description";
                $posts          = kirby()->collection('posts')->limit(20);
                
                return new Response(snippet('rss', compact('title', 'description', 'posts') , true), 'application/rss+xml');
            }
        ],
    ],
];
