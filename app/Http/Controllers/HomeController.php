<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Percent;
use App\Models\Social;

class HomeController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $skills = Percent::all();
        $social = Social::all();
        return view('frontend.port', compact('skills','social'));
    }
}
