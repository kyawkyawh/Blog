<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Title;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episode = Episode::orderBy('created_at', 'DESC')->get();
        // dd($episode);
        return view('episodes.index',['episodes' => $episode]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titles = Title::all();
        return view('episodes.create', ['titles'=>$titles]);
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
        $validate = $request->validate([
            'name' => 'required|max:255',
            'text' => 'required',
            'title_id' => 'required'
        ]);

        $episode = Episode::create($validate);

        return redirect()->route('episodes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function show(Episode $episode)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function edit(Episode $episode, Request $request)
    {
        $episode = Episode::findOrFail($request->id);
        $titles = Title::all();
        return view('episodes.edit', ['episode'=>$episode, 'titles'=>$titles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Episode $episode)
    {
        $episode = Episode::findOrFail($request->id);
        $validate = $request->validate([
            'name' => 'required|max:255',
            'text' => 'required',
            'title_id' => 'required'
        ]);

        $episode = Episode::update($validate);

        return redirect()->route('episodes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Episode $episode, Request $request)
    {
        $episode = Episode::findOrFail($request->id);
        $episode->delete();

        return redirect()->route('episodes');
    }
}
