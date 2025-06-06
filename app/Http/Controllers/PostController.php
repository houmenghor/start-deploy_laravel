<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $posts = [
        1 => ['title' => 'First Post', 'content' => 'This is the first post'],
        2 => ['title' => 'Second Post', 'content' => 'This is the second post']
    ];
    public function index()
    {
        return view('posts.index',['post' => $this->posts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        return "New post created with title: " . $request->title;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (isset($this->posts[$id])) {
            return view('posts.show', ['post' => $this->posts[$id]]);
        } else {
            return "Post not found.";
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit($id)
    {
        if (isset($this->posts[$id])) {
            
        }
    }
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
