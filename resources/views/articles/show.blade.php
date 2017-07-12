@extends('layouts.default')
@section('content')
      <h1>{{ $article->title }}</h1>
      <article class="">
          {{ $article->content }}
      </article>
@endsection
