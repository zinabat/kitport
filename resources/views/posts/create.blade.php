@extends('layouts.admin')

@section('head')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h5 class="p-0">New Post</h5>
  </div>
  <div class="card-body">

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form method="post" action="{{ route('posts.store') }}" id="postForm">
      {{ csrf_field() }}
      <div class="form-group">
        <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
      </div>
      <div class="form-group">
        <div id="spinner" class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <textarea id="summernote" name="content" style="display:none">{{ old('content') }}</textarea>
      </div>
      <input type="hidden" name="draft" value="0">
      <div class="form-group">
        <button class="btn btn-primary">Publish</button>
        <button class="btn btn-secondary" id="draftButton">Save Draft</button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('footer')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
<script>
$(document).ready(function() {
  $('#draftButton').click((e) => {
    e.preventDefault();
    $('[name=draft]').value('1');
    $('#postForm').submit();
  });

  // add a save draft settimeout every 2 minutes
  // 

  $('#summernote').summernote({
    height: 300,                 // set editor height
    fontNames: ['Gentium Basic', 'Arial', 'Helvetica', 'Comic Sans', 'Courier New'],
    fontNamesIgnoreCheck: ['Gentium Basic'],
    minHeight: null,             // set minimum height of editor
    maxHeight: null,             // set maximum height of editor
    placeholder: 'Write post content here...',
    callbacks: {
      // remove loader
      onInit: function() {
        $('#spinner').hide();
        $('#summernote').summernote('fontName', 'Gentium Basic');

      }
    }
  });
});
</script>
@endsection