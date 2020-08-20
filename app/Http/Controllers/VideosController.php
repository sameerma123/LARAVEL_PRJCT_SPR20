<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\video;

class VideosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = video::all();
        //return ($video);
        return view('pages.videos')->with('video', $video->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.videosAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required',
            'video' => 'required',
            'description' => 'required',
            'url' => 'required'
        ]);

        $video = new video;
        $video->name = $request -> input('name');
        $video->video = $request -> input('video');
        $video->decription = $request -> input('description');
        $video->url = $request -> input('url');
        $video->save();
      
        return redirect('/videos') -> with('success', 'Video added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video=video::find($tableid);
        return view('pages.videos')->with('video', $video);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video=video::find($id);
        return view('pages.videosEdit')->with('video', $video);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'name' => 'required',
            'video' => 'required',
            'description' => 'required',
            'url' => 'required'
        ]);

        $video = video::find($id);
        $video->name = $request -> input('name');
        $video->video = $request -> input('video');
        $video->decription = $request -> input('description');
        $video->url = $request -> input('url');
        $video->save();
      
        return redirect('/videos') -> with('success', 'Video Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video=video::find($id); 
        $video->delete();
        return redirect('/videos') -> with('success', 'Video deleted');
    }
}
