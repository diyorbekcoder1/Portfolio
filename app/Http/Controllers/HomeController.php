<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Percent;

class HomeController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $skills = Percent::all();
        return view('frontend.port', compact('skills'));
    }
}
