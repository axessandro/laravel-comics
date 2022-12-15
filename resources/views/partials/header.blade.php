<div class="top-header">
    <div class="container d-flex flex-row-reverse">
        <span>DC POWER' VISA</span>
        <span>ADDITIONAL DC SITE V</span>
    </div>
</div>
<header>
    <div class="container">
        <div class="logo"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Comics logo">
        </div>
        <nav>
            <ul class="links">
                @foreach ($links as $link)
                    <li>
                        <a href="{{ $link['href'] }}">{{ strtoupper($link['title']) }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
