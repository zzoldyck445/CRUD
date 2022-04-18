<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts; //add this to pass the data from database to view
use App\Http\Controllers\Crud\Post;

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
        // print_r(route('home'));
        // return view('home');
        $posts = Posts::all();
        
        return view('home', ['posts' => $posts]); //pass data to your views
    }
    
}
