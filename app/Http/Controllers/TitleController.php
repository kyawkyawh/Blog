<?php

namespace App\Http\Controllers;

use App\Models\Title;
use App\Models\Episode;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = Title::orderBy('title')->get();
        return view('titles.index', ['titles' => $titles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('titles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        $input = $request->all();

        if ($image = $request->file('cover')) {
            $destinationPath = 'image/title/cover';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = "$profileImage";
        }

        Title::create($input);

        return redirect()->route('titles');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title, Request $request)
    {
        $title = Title::findOrFail($request->id);
        $episodes = Episode::where('title_id', $request->id)->get();

        return view('titles.allepisode', ['episodes' => $episodes, 'title' => $title]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title, Request $request)
    {
        $title = Title::findOrFail($request->id);
        return view('titles.edit', ['title' => $title]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title $title)
    {
        // dd($request);
        $title = Title::find($request->id);
        // dd($title);
        $validate =  $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        if ($image = $request->file('cover')) {
            $destinationPath = 'image/title/cover';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validate['cover'] = "$profileImage";
        }

        $title->update($validate);

        return redirect()->route('titles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $title, Request $request)
    {
        $title =  Title::findOrFail($request->id);
        $title->delete();

        return redirect()->route('titles');
    }

    public function detail(Request $request){
        $title = Title::findOrFail($request->id);
        return view('titles.detail', ['title'=>$title]);
    }
}
