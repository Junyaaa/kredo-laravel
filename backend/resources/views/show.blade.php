@extends('layouts.app')

@section('title', 'All Posts')

@section('header')
    <h1>All Posts</h1>
@endsection

@section('content')
    @if($daves_posts)
        <ul>
            @foreach($daves_posts as $posts)
            <li>{{ $posts }}</li>
            @endforeach
        </ul>
    @endif


@endsection

@section('footer')
    <p>This is the footer</p>
@endsection