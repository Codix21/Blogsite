<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $blogs = Blog::where('category_id', $category->id)->get();

        return view('blog.list', compact('category', 'blogs'));
    }
}
