<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return Inertia::render(
            'Post/List',
            ['posts' => $posts]
        );
    }
    public function show($id){
        $post = Post::findOrFail($id);
          return Inertia::render(
             'Post/Show',
            ['posts'=>$post]
                        );
    }

}
