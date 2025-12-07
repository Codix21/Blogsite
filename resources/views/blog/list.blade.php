@extends('layouts.layout')

@section('title', $category->name)

@section('content')

<h1>{{ $category->name }}</h1>

<div class="blog-list-container">

    @foreach($blogs as $blog)
        <div class="blog-card">
            <h3>{{ $blog->title }}</h3>
            <p>{{ Str::limit($blog->content, 120) }}</p>
            <a href="{{ route('blog.single', $blog->slug) }}">Read more →</a>
        </div>
    @endforeach

</div>

@endsection
