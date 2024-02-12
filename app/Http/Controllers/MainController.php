<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

// use GuzzleHttp\Client;

class MainController extends Controller
{
    public function main()
    {
        $res = Http::get('http://127.0.0.1:8000/open-api?d=listcalon');
        if ($res->successful()) {
            $temp = $res;
            $data['calon'] = $temp['data']['calon'];
            return view('main', $data);
        } else {
            return response()->json(['error' => 'gagal mengambil data'], $res->status());
        }
        // $serv = new Client();
        // $res = $serv->request('GET', 'http://127.0.0.1:8000/open-api?d=listcalon');
        // $data = new \stdClass;
        // $data->status = $res->getStatusCode();
        // $data->body = $res->getBody();
        // return response()->json($data);
    }
}
