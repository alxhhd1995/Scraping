<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Goutte\Client;

class ScrapingController extends Controller
{
    public function example(Client $client){


     $crawler = $client->request('GET','http://www.compuvisionperu.pe/5-laptop');
     dd($crawler);

    }
}
