<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apiKey = 'pub_334893aac1d47044f327c1da8dbdcc826ff71'; // Gantilah dengan API key Anda
        
    
        // https://newsdata.io/api/1/news?apikey=pub_334893aac1d47044f327c1da8dbdcc826ff71

        $search = 'crypto';
        $country = 'id';
        $response = Http::withoutVerifying()->get('https://newsdata.io/api/1/news?country='. $country .'&apikey=' . $apiKey);
        $newsData = json_decode($response->getBody(), true);

        return view('home', [
            'newsData' => $newsData
        ]);
    }

    public function search(Request $request){
        $apiKey = 'pub_334893aac1d47044f327c1da8dbdcc826ff71'; // Gantilah dengan API key Anda
        
    
        // https://newsdata.io/api/1/news?apikey=pub_334893aac1d47044f327c1da8dbdcc826ff71$q=crypto
        $credentials = $request->validate([
            'search' => 'required'
        ]);

        $search = $credentials['search'];
        // $country = 'id';
        $response = Http::withoutVerifying()->get('https://newsdata.io/api/1/news?apikey=' . $apiKey . '&q='. $search);
        $newsData = json_decode($response->getBody(), true);

        return view('home', [
            'newsData' => $newsData
        ]);
    }

    public function getNews()
    {
       
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function logout(){

    }
}
