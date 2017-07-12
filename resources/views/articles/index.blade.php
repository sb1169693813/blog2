@extends('layouts.default')
@section('content')
    <a href="{{ route('articles.create') }}">添加新文章</a>
    @foreach($articles as $article)
      <h1><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h1>
      <article class="">
          {{ $article->content }}
      </article>
    @endforeach
@endsection
