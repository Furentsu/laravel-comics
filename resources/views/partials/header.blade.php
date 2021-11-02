<header>

    {{-- Header Navbar --}}
    <div class="header-top-container">
        <a href="#" id="logo">
            <img src="{{asset('images/dc-logo.png')}}" alt="DC logo">
        </a>

        <nav>
            <ul>
                @foreach ($header_options as $option)
                    <li class="{{request()->routeIs($option['route'] ? 'active' : '')}}">
                        <a href="{{$option['route']}}">{{ $option['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <div class="search-box">
            <input type="text" class="input-search" placeholder="Type to Search...">
            <i class="fas fa-search"></i>
          </div>
    </div>

    {{-- Jumbotron --}}
    <div id="jumbo">
        @if (\Request::route()->getName() == 'comics')
            <div class="main-content-title">
                <h3>Current series</h3>
            </div>
        @endif
    </div>

</header>

@section('cdn-import')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"> 
@endsection