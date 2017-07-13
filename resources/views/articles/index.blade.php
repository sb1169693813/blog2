@extends('layouts.app')
@section('content')
    <a href="{{ route('articles.create') }}">添加新文章</a>
    @foreach($articles as $article)

      <h1><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h1>


      <h2><a href="{{ route('articles.edit', $article->id) }}">编辑</a></h2>

      <article class="">
          {{ $article->content }}
      </article>

    @endforeach
@endsection
