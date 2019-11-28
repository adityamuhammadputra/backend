<?php

namespace App\Http\Controllers;

use App\Header;
use App\Http\Resources\Header as HeaderResource;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        // return HeaderResource::collection(Header::with('details')->paginate('2'));
        return new HeaderResource(Header::with('details')->first());
    }
}
