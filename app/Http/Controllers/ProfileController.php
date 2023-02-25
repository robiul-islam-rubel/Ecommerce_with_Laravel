<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function index()
    {

        $data=Http::get("https://jsonplaceholder.typicode.com/posts")->json();
        return view('list',['data'=>$data]);
    }
}
