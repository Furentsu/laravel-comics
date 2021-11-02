@extends('layouts.template')

@section('content')

    <div class="comic-cover-displayer">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>

    <section class="top">
        <div class="comic-details-top">

            <div class="comic-top-left">
                <h2>{{$comic['title']}}</h2>
                <div class="green-container">
                    <span>U.S. Price $19.99</span>
                    <span>Available</span>
                    <span>Check Availability</span>
                    
                </div>

                <p>{{$comic['description']}}</p>
                
            </div>

            <div class="comic-top-right">
                <img src="{{asset('images/advertisment.jpg')}}" alt="Advertisment">
            </div>
        </div>
    
    </section>

    <section class="bottom">
        <div class="comic-details-bottom">

            <div class="comic-bottom-left">
                <h3>Talent</h3>
                <div class="artists">
                    <span>Art by:</span>
                    <div class="artists-names">
                        @foreach ($comic['artists'] as $artist)
                            <span>{{$artist}}, </span>
                        @endforeach
                    </div>  
                </div>

                <div class="writers">
                    <span>Written by:</span>
                    <div class="writers-names">
                        @foreach ($comic['writers'] as $writer)
                            <span>{{$writer}}, </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="comic-bottom-right">
                <h3>Specs</h3>
                <div class="series">
                    <span>Series:</span>
                    <div class="series-data">
                        <span>{{ $comic['series'] }}</span>
                    </div>
                    
                </div>

                <div class="price">
                    <span>U.S Price:</span>
                    <div class="price-data">
                        <span>{{ $comic['price'] }}</span>
                    </div>
                    
                </div>

                <div class="sale-date">
                    <span>On Sale Date:</span>
                    <div class="sale-data">
                        <span>{{ $comic['sale_date'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection