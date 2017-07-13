@extends('layouts.app')
@section('content')
    {!! Form::open(['route' => 'articles.store']) !!}
    <div class="">
        {!! Form::label('title','titleinput') !!}
        {!! Form::text('title') !!}
    </div>
    <div class="">
        {!! Form::label('intro','intro') !!}
        {!! Form::text('intro') !!}
    </div>
    <div class="">
        {!! Form::label('content','contentinput') !!}
        {!! Form::textarea('content') !!}
    </div>
    <div class="">
        {!! Form::label('published_at','published_at') !!}
          {!! Form::date('published_at', \Carbon\Carbon::now()) !!}
    </div>
    <div class="">
        {!! Form::submit('提交') !!}
    </div>
    @if($errors->any())
      @foreach($errors->all() as $error)
        {{ $error }}
      @endforeach
      @endif
    {!! Form::close() !!}
@endsection
