@extends('layouts.layout')

@section('title', $category->name)

@section('content')

<h1>{{ $category->name }}</h1>

<div class="blog-list-container">

    @foreach($posts as $post)
        <div class="blog-card">
            <h3>{{ $post->title }}</h3>
            <p>{{ Str::limit($post->excerpt ?? $post->content, 120) }}</p>

            <a href="{{ route('blog.single', $post->slug) }}">
    Read more →
</a>


        </div>
    @endforeach

</div>

@endsection
