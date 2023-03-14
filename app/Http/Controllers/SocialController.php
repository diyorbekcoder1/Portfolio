<?php

namespace App\Http\Controllers;
use App\Http\Requests\SocialRequest;
use App\Models\Social;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    use  FileUpload;
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $socels = Social::all();
        return view('backand.links.index', compact('socels'));
    }
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('backand.links.create');
    }

    public function store(SocialRequest $socialRequest)
    {

        $data = $socialRequest->validated();
        $data = $this->fileUpload($data);
        Social::create($data);
        return redirect()->route('links.index')->with('message', 'Post successfully create.');
    }






    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:socials,id']);
        $post = Social::find($id);
        unlink('uploads/' . $post->image);
        $post->delete();
        return redirect()->route('links.index')->with('message', 'Post successfully delete.');
    }
}
