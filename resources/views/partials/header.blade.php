<header>

    <div class="logo">
        <img src="{{asset('images/dc-logo.png')}}" alt="DC logo">
    </div>

    <ul>
       @foreach ($header_options as $option)
           <li><a href="{{$option['route']}}">{{ $option['text'] }}</a></li>
       @endforeach
    </ul>

</header>