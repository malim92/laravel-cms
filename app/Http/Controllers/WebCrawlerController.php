<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Illuminate\Support\Facades\Log;

class WebCrawlerController extends Controller
{
    public function crawlWebsite()
    {
        $client = new Client();

        $url = 'https://edition.cnn.com/europe';

        $crawler = $client->request('GET', $url);
        $content = $crawler->filter('.container__headline-text')->each(function ($node) {
            // Extract content for each matching element
            return $node->html();
        });
        // all article titles are stored in $content array 
        Log::debug($content);
        return response()->json(['content' => $content]);
    }
}
