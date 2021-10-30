@extends('layouts.template')

@section('title', 'Comics')

@section('content')
    <div class="container">
        <div class="comics_container">
            @foreach ($comics as $comic)
                <div class="comic_card">
                    <img src="{{$comic['thumb']}}" alt="$comic['title']">
                    <h3> {{ $comic['title'] }} </h3>
                </div>
            @endforeach
        </div>
    </div>    
@endsection