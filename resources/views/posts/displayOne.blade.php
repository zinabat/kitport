@extends('layouts.app')

@section('content')
<article class="container post-content">
    <!-- default layout -->
    <header class="lead pt-4">
        <h1>{{ $post->subject }}</h1>
        <span class="author">
            <a href="#" class="author-link">{{ $post->author }}</a>
        </span>
        {{ $post->created_at }}
    </header>
    <hr>
    {!! $post->content !!}
</article>
@endsection