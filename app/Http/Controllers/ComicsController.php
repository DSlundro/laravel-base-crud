<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ComicRequest;

use App\Comic;



class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all()->sortByDesc('id');
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {

        $validated_data = $request->validated();
        $comic = new Comic();
        Comic::create($validated_data);
        return redirect()->route('comics.index')->with('created', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic )
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $validated_data = $request->validated();
        $comic->update($validated_data);
        return redirect()->route('comics.index')->with('edited', 'Post modified successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted', 'Post deleted successfully');
    }
}
