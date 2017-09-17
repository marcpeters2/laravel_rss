<?php

namespace App\Http\Controllers;
use Feed;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        Feed::$cacheDir = storage_path() . '/app/tmp';
        Feed::$cacheExpire = '30 seconds';
    }

    public function home() {
        $rssData = Feed::loadRss('https://news.ycombinator.com/rss');

        return view('home', [
            'rssData' => $rssData
        ]);
    }
}
