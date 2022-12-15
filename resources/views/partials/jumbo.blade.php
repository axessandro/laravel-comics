<div class="jumbo">
    <div class="container">
        <ul class="links">
            {{-- jumbo link --}}
            @foreach ($links_jumbo as $item)
                <li>
                    <img src="{{ Vite::asset("resources/img/{$item['img']}") }}" alt="">
                    <a href="{{ $item['href'] }}">{{ strtoupper($item['title']) }}</a>
                </li>
            @endforeach
            {{-- jumbo link --}}
        </ul>
    </div>
</div>
