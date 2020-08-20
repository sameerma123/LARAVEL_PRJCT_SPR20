<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;

class EventsController extends Controller
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
        $event = event::all();
        return view('pages.events')->with('event', $event->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.eventsAdd');
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
            'description' => 'required',
            'contactname'=> 'required',
            'telephone' => 'required',
            'email' => 'required',
            'location' => 'required',
            'date' => 'required',
            'assets' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('assets')){
            // get filename with the extension
            $filenameWithExt = $request->file('assets')->getClientOriginalName();
            // get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('assets')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('assets')->storeAs('public/assets', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $event = new event;
        $event->name = $request -> input('name');
        $event->description = $request -> input('description');
        $event->contactname = $request -> input('contactname');
        $event->telephone = $request -> input('telephone');
        $event->email = $request -> input('email');
        $event->location = $request -> input('location');
        $event->date = $request -> input('date');
        $event->assets = $fileNameToStore;
        $event->save();

        return redirect('/events') -> with('success', 'Events added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event=event::find($tableid);
        return view('pages.events')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event=event::find($id);
        return view('pages.eventsEdit')->with('event', $event);
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
            'description' => 'required',
            'contactname'=> 'required',
            'telephone' => 'required',
            'email' => 'required',
            'location' => 'required',
            'date' => 'required'
        ]);

        // Handle File Upload
        if($request->hasFile('assets')){
            // get filename with the extension
            $filenameWithExt = $request->file('assets')->getClientOriginalName();
            // get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('assets')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('assets')->storeAs('public/assets', $fileNameToStore);
        } 

        $event = event::find($id);
        $event->name = $request -> input('name');
        $event->description = $request -> input('description');
        $event->contactname = $request -> input('contactname');
        $event->telephone = $request -> input('telephone');
        $event->email = $request -> input('email');
        $event->location = $request -> input('location');
        $event->date = $request -> input('date');
        if($request->hasFile('assets')){
            $event->assets = $fileNameToStore;
        }
        $event->save();

        return redirect('/events') -> with('success', 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=event::find($id); 
        $event->delete();
        return redirect('/events') -> with('success', 'Event deleted');
    }
}
