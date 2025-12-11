<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class BlogController extends Controller
{
   public function list($slug)
{
    $category = Category::where('slug', $slug)->firstOrFail();
    $posts = Post::where('category_id', $category->id)->get();

    return view('blog.list', compact('category', 'posts'));
}

public function single($slug)
{
    $post = Post::where('slug', $slug)->firstOrFail();

    return view('blog.single', compact('post'));
}


}
