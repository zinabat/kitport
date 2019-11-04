<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

/**
 * Controller for public display of posts
 */

class DisplayPostCOntroller extends Controller
{
    public function index() {
        // display an index page
        return $this->showAll();
    }

    /**
     * Display a single post
     * 
     * @return \Illuminate\Http\Response
     */
    public function showOne($id) {
        $post = Post::find($id);
        return view('posts/displayOne')->with('post', $post);
    }

    public function showAll() {
        // display paginated list of posts
        return view('posts/displayList')->with('posts', Post::all());
    }
}
