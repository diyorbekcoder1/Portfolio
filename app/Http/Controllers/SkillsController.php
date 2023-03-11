<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillsRequest;
use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {

        $skills = Skills::all();
        return view('backand.skills.skills', compact('skills'));
    }


    public function create()
    {
        view('backand.skills.skills_create');
    }

    public function store(SkillsRequest $skillsRequest): \Illuminate\Http\RedirectResponse
    {
        $data = $skillsRequest->validated();
        Skills::create($data);
        return redirect()->route('skills.index')->with('message', 'Post successfully create.');
    }

}
