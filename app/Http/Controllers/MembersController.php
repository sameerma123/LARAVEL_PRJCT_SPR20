<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;

class MembersController extends Controller
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
        $member=member::all();
        return view('pages.members')->with('member', $member->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.membersAdd');
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
            'telephone' => 'required',
            'email' => 'required',
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

        $member = new member;
        $member->name = $request -> input('name');
        $member->description = $request -> input('description');
        $member->telephone = $request -> input('telephone');
        $member->email = $request -> input('email');
        $member->assets = $fileNameToStore;
        $member->save();

        return redirect('/members') -> with('success', 'Profile added');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member=member::find($tableid);
        return view('pages.members')->with('member', $member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=member::find($id); 
        return view('pages.membersEdit')->with('member', $member);
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
            'telephone' => 'required',
            'email' => 'required',
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

        $member = member::find($id);
        $member->name = $request -> input('name');
        $member->description = $request -> input('description');
        $member->telephone = $request -> input('telephone');
        $member->email = $request -> input('email');
        if($request->hasFile('assets')){
            $member->assets = $fileNameToStore;
        }
        $member->save();

        return redirect('/members') -> with('success', 'Profile Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member=member::find($id); 
        $member->delete();
        return redirect('/members') -> with('success', 'Profile deleted');
    }
}
