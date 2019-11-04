@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    {{ $post }}
    @endforeach
</div>
@endsection