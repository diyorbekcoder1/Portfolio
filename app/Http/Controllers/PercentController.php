<?php

namespace App\Http\Controllers;

use App\Http\Requests\PercentRequest;
use App\Models\Percent;
use Illuminate\Http\Request;

class PercentController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $per = Percent::all();
        return view('backand.skil.index', compact('per'));
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('backand.skil.create');
    }

    public function store(PercentRequest $percentRequest)
    {

        $data = $percentRequest->validated();
        Percent::create($data);
        return redirect()->route('skills.index')->with('message', 'Post successfully create.');
    }


    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $per_edit = Percent::find($id);
        return view('backand.skil.edit', compact('per_edit'));

    }


    public function update(PercentRequest $percentRequest, $id): \Illuminate\Http\RedirectResponse
    {
        $data = $percentRequest->validated();
        $post = Percent::find($id);
        $post->update($data);
    }


    public function destroy($id)
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:percents,id']);
        $post = Percent::find($id);
        $post->delete();
        return redirect()->route('skills.index')->with('message', 'Post successfully delete.');
    }
}
