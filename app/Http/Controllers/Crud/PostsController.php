<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    //display data from database
    public function show(Posts $post)
    {
        // dd(Posts::all());
        
        return view('crud.view', compact('post'));
    }

    // create method
    public function create()
    {

        return view('crud.create');
    }

    // store method
    public function store(Posts $post)
    {

        request()->validate([
            'name' => 'required',
            'course' => 'required',
            "age" => 'required',
        ]);
        Posts::create([
            'name' => request('name'),
            'course' => request("course"),
            'age' => request("age"),
        ]);
        return redirect('home');
    }

    // edit method
    public function edit(Posts $post)
    {
        return view('crud.edit', ['post' => $post]);
    }

    // update method
    public function update(Posts $post)
    {
        // dd(request()->all());
        // Request::all();
        request()->validate([
            'name' => 'required',
            'course' => 'required',
            "age" => 'required',
        ]);
        $post->update([
            'name' => request('name'),
            'course' => request("course"),
            'age' => request("age"),
        ]);

        return redirect('home')->with('success','Post updated successfully');
    }

    // delete method
    public function destroy(Posts $post)
    {
        $post->delete();

        return redirect('home');
    }
}
