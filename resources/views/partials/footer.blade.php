<footer>
    <div class="footer-top">
        <div class="footer-top-container">
            <div class="footer-top-left">
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
            <div class="footer-top-right">
                <img src="../images/dc-logo-bg.png" alt="DC logo">
                
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="footer-bottom-container">
            <div class="footer-bottom-left">
                <button type="button">Sign-up Now!</button>
            </div>
            <div class="footer-bottom-right">
                <h2>Follow us</h2>
                <ul>
                    <li><a href="#"><img src="../images/footer-facebook.png" alt="Facebook's logo"></a></li>
                    <li><a href="#"><img src="../images/footer-twitter.png" alt="Twitter's logo"></a></li>
                    <li><a href="#"><img src="../images/footer-youtube.png" alt="Youtube's logo"></a></li>
                    <li><a href="#"><img src="../images/footer-pinterest.png" alt="Pinterest's logo"></a></li>
                    <li><a href="#"><img src="../images/footer-periscope.png" alt="Periscope's logo"></a></li>
                </ul>
            </div>
        </div>
    </div>
    
</footer>