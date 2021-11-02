@extends('layouts.template')

@section('content')

    <div class="comic-cover-displayer">
        <img src="" alt="">
    </div>
    
    <div class="container">
        <div class="comic-details">
            <h1>{{$comic['title']}}</h1>
        </div>
    </div>
@endsection