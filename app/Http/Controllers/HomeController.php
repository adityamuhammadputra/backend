<?php

namespace App\Http\Controllers;

use App\Header;
use App\Http\Resources\HomeResource;

class HomeController extends Controller
{

    public function index()
    {
        // return HeaderResource::collection(Header::with('details')->paginate('2'));
        return new HomeResource(Header::with('details')->first());
    }
}
