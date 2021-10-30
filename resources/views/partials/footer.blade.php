<footer>
    <div class="general-container">
        <div class="footer-left">
            <div class="footer-list-left">
                <h2>DC COMICS</h2>
                <ul>
                    @foreach ($comics as $link)
                        <li>
                            <a href="{{$link['route']}}">{{$link['text']}}</a>
                        </li>
                    @endforeach
                </ul>

                <h2>SHOP</h2>
                <ul>
                    @foreach ($shop as $link)
                        <li>
                            <a href="#">{{$link['text']}}</a>
                        </li>
                    @endforeach
                </ul>  
            </div>

            <div class="footer-list-center">
                <h2>DC</h2>
                <ul>
                    @foreach ($dc as $link)
                        <li>
                            <a href="#">{{$link['text']}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="footer-list-right">
                <h2>SITES</h2>
                <ul>
                    @foreach ($sites as $link)
                    <li>
                        <a href="#">{{$link['text']}}</a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="footer-right">
            
        </div>
    </div>
</footer>