@extends('layouts.default')

@section('content')

    <h1>{{$article->title}}</h1>
    <div class="content">
        <img src="/uploads/article/medium/{{ $article->image }}" style="float: left">
        <p>{!! $article->body !!}</p>
    </div>

@include('components.messageForm')

@stop