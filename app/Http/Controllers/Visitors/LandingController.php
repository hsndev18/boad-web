<?php

namespace App\Http\Controllers\Visitors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Problem;

class LandingController extends Controller
{
    public function index()
    {
        return view('visitors.landing');
    }

    public function startPage()
    {
        return view('visitors.start');
    }

    public function loading(Problem $problem)
    {
        return view('visitors.loading', compact('problem'));
    }


}
