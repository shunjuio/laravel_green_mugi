<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class QiitaApiController extends Controller
{
  public function index()
  {
    $client = new Client([
      'base_uri' => 'https://qiita.com/api/v2/',
      'headers' => [
        'Authorization' => 'Bearer ' . config('qiita.token'),
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
      ],
    ]);

    $response = $client->get('items', [
      'query' => [
        'page' => 1,
        'per_page' => 20,
      ],
    ]);

    $headers = $response->getHeaders();
    $data = json_decode($response->getBody(), true);

    return view('qiita.index', compact('data','headers'));

  }

  public function search (Request $request)
  {
    $query = $request->query('q');

    $client = new Client([
      'base_uri' => 'https://qiita.com/api/v2/',
      'headers' => [
        'Authorization' => 'Bearer ' . config('qiita.token'),
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
      ],
    ]);

    $response = $client->get('items', [
      'query' => [
        'page' => 1,
        'per_page' => 20,
        'query' => $query
      ],
    ]);
    $headers = $response->getHeaders();
    dd($headers);
    $data = json_decode($response->getBody(), true);

    return view('qiita.search', compact('data','query', 'headers'));
  }
}
