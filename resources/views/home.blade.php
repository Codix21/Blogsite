@extends('layouts.layout')

@section('title', 'Home')

@section('content')

<section class="hero">
    <h1>TIMELESS</h1>
    <p>LUXURY REDEFINED</p>
</section>

<section class="collections" id="collections">
    @foreach($categories as $cat)
        <div class="card">
            <img src="{{ $cat->image }}" alt="{{ $cat->name }}">
            <h3>{{ strtoupper($cat->name) }}</h3>
            <a href="{{ route('blog.list', $cat->slug) }}">DISCOVER →</a>
        </div>
    @endforeach
</section>

<section class="newsletter">
    <h2>JOIN THE INNER CIRCLE</h2>
    <input type="email" id="email" placeholder="Your email">
    <button id="subscribe-btn">SUBSCRIBE</button>
    <div id="message" class="fade-message"></div>
</section>

@endsection
