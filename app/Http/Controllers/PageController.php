<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data['videos'] = [
            [
                'title' => 'Big Buck Bunny',
                'short_url' => 'BigBuckBunny.mp4',
                'url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4',
            ],
            [
                'title' => 'Elephants Dream',
                'short_url' => 'ElephantsDream.mp4',
                'url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4',
            ],
            [
                'title' => 'For Bigger Blazes',
                'short_url' => 'ForBiggerBlazes.mp4',
                'url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4',
            ],
            [
                'title' => 'For Bigger Escapes',
                'short_url' => 'ForBiggerEscapes.mp4',
                'url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4',
            ],
        ];
        return view('welcome', $data);
    }

    public function PlayVideo($videoId)
    {
        $videoBaseUrl = "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/";

        $data = [
            'url' => $videoBaseUrl.$videoId,
        ];

        return view('videoPlayer', $data);
    }
}
