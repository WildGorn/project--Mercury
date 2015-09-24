@extends('layouts.default')

@section('content')
    @foreach($articles as $item)
        <div class="row">
            <div class="col-md-2">
                <img src="/uploads/article/small/{{$item->image}}">
            </div>
            <div class="col-md-10">
                <h2>{{$item->title}}</h2>
                <div class="content">
                    {{--{!! dd($item->body) !!}--}}
                    {!! $item->body !!}
                </div>
                <a href="/{{$item->slug}}">read more...</a>
            </div>
        </div>
    @endforeach

    @include('partials.paginate', ['pager' => $articles])
@stop