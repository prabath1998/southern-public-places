<?php

namespace App\Http\Controllers;

use App\Models\PublicPlace;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PublicPlacesController extends Controller
{
    public function index()
    {

        $places = PublicPlace::all();

        return view('place.index', compact('places'));
    }
    public function fetchPublicPlaces()
    {
        $overpassUrl = 'http://overpass-api.de/api/interpreter';
        $query = '[out:json];(node["amenity"="hospital"](6.0000,80.0000,6.5000,81.0000);
                  node["amenity"="bank"](6.0000,80.0000,6.5000,81.0000);
                  node["amenity"="bus_station"](6.0000,80.0000,6.5000,81.0000););out;';

        $client = new Client();
        $response = $client->get($overpassUrl, [
            'query' => ['data' => $query],
        ]);

        $data = json_decode($response->getBody()->getContents(), true);
        return response()->json($data);
    }
}
