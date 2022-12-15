@extends('layouts.app')

@section('content')
    <main>
        <div class="ms_container">
            <div class="label">CURRENT SERIES</div>
            <div class="cards">
                {{-- content card --}}
                @foreach ($comics as $item)
                    <div class="card">
                        <div class="img-wrapper">
                            <img class="thumb" src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                        </div>
                        <p>{{ strtoupper($item['series']) }}</p>
                    </div>
                @endforeach
                {{-- content card --}}
            </div>
            <button>LOAD MORE</button>
        </div>
    </main>
@endsection
