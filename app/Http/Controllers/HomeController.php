<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\inicio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(!Auth::guest()){
            if(Auth::user()->adminFlag == 1){
                return view('pages.adminPanel');
            } else {
                $inicio = inicio::all();
                return view('pages.inicio')->with('inicio', $inicio->toArray());
            }
        }
    }
}
