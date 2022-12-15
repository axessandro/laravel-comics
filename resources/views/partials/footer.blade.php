<footer>
    <div class="top-footer">
        <div class="container">

            <div class="cols">
                <div class="col">
                    <h3>DC COMICS</h3>
                    <ul class="links">
                        {{-- dcComicsLinks --}}
                        @foreach ($links_footer['dcComicsLinks'] as $links)
                            <li>
                                <a href="{{ $links['href'] }}">{{ $links['title'] }}</a>
                            </li>
                        @endforeach
                        {{-- dcComicsLinks --}}
                    </ul>
                    <h3>SHOP</h3>
                    <ul class="links">
                        {{-- shopLinks --}}
                        @foreach ($links_footer['shopLinks'] as $links)
                            <li>
                                <a href="{{ $links['href'] }}">{{ $links['title'] }}</a>
                            </li>
                        @endforeach
                        {{-- shopLinks --}}
                    </ul>
                </div>

                <div class="col">
                    <h3>DC</h3>
                    <ul class="links">
                        {{-- dcLinks --}}
                        @foreach ($links_footer['dcLinks'] as $links)
                            <li>
                                <a href="{{ $links['href'] }}">{{ $links['title'] }}</a>
                            </li>
                        @endforeach
                        {{-- dcLinks --}}
                    </ul>
                </div>

                <div class="col">
                    <h3>SITES</h3>
                    <ul class="links">
                        {{-- sitesLinks --}}
                        @foreach ($links_footer['sitesLinks'] as $links)
                            <li>
                                <a href="{{ $links['href'] }}">{{ $links['title'] }}</a>
                            </li>
                        @endforeach
                        {{-- sitesLinks --}}
                    </ul>
                </div>

            </div>

            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="DC Comics logo">
            </div>

        </div>
    </div>
    <div class="bot-footer">
        <div class="container">
            <button>SIGN-UP NOW</button>
            <div class="follow-us">
                <h3>FOLLOW US</h3>
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook logo">
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter logo">
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="Youtube logo">
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pintarest logo">
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope logo">
            </div>
        </div>
    </div>
</footer>
