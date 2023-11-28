<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index(){
        return view('post');
    }

    public function show($id_articles)
    {

        $apiKey = 'pub_334893aac1d47044f327c1da8dbdcc826ff71';
        $country = 'id';
        $search = 'crypto';
        $response = Http::withoutVerifying()->get('https://newsdata.io/api/1/news?country=' . $country . '&apikey=' . $apiKey);
        $newsData = json_decode($response->getBody(), true);

        // Assuming your $newsData has a structure like ['results' => [...]]
        $filteredArticle = collect($newsData['results'])->firstWhere('id_articles', $id_articles);

        

        return view('post',[
            'article' => $filteredArticle
        ]);
    }
    
}