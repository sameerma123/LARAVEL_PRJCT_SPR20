<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class ProjectsController extends Controller
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
        //$project = project::table('projects')->select('name','description')->get();
        $project = project::all();
        //return count($project) >= 1;
        return view('pages.projects')->with('project', $project->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.projectsAdd');
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
            'purpose' => 'required',
            'values' => 'required',
            'methods' => 'required',
            'investigation' => 'required',
            'associations' => 'required',
            'research' => 'required',
            'assets' => 'image|nullable|max:1999',
            'assets1' => 'image|nullable|max:1999'
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
        

        $project = new project;
        $project->name = $request -> input('name');
        $project->description = $request -> input('description');
        $project->purpose = $request -> input('purpose');
        $project->values = $request -> input('values');
        $project->methods = $request -> input('methods');
        $project->investigation = $request -> input('investigation');
        $project->associations = $request -> input('associations');
        $project->research = $request -> input('research');
        $project->assets = $fileNameToStore;
        $project->save();

       
        return redirect('/projects') -> with('success', 'Project added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project=project::find($tableid);
        return view('pages.projects')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project=project::find($id);
        return view('pages.projectsEdit')->with('project', $project);
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
            'purpose' => 'required',
            'values' => 'required',
            'methods' => 'required',
            'investigation' => 'required',
            'associations' => 'required',
            'research' => 'required'
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

        $project=project::find($id);
        $project->name = $request -> input('name');
        $project->description = $request -> input('description');
        $project->purpose = $request -> input('purpose');
        $project->values = $request -> input('values');
        $project->methods = $request -> input('methods');
        $project->investigation = $request -> input('investigation');
        $project->associations = $request -> input('associations');
        $project->research = $request -> input('research');
        if($request->hasFile('assets')){
            $project->assets = $fileNameToStore;
        }
        $project->save();

       
        return redirect('/projects') -> with('success', 'Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=project::find($id); 
        $project->delete();
        return redirect('/projects') -> with('success', 'Project deleted');
    }
}
