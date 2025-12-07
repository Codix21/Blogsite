@extends('layouts.layout')

@section('title', $blog->title)

@section('content')

<h1>{{ $blog->title }}</h1>

<p>{{ $blog->content }}</p>

@endsection
