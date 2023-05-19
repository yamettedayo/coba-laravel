@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $post->title }}</h1>

{!! $post->body !!}
`

{{-- <article>
  <h2>{{ $post["title"] }}</h2>
  <h5>{{ $post ["author"] }}</h5>
  <p>{{ $post["body"] }}</p>
</article> --}}
    
<a href="/posts">Back To Posts</a>

@endsection