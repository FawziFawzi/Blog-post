<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store (Post $post)
    {
//        dd($post);
//        request validation
        request()->validate([
            'body' => 'required'
        ]);

        // add a comment to a given post.
//        dd(auth()->user()->id);
        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body')

        ]);
        return back();

    }
}
