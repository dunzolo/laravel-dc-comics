@extends('layouts.app')

@section('content')
<div id="detail">
    <div class="bar-light-blue">
        <div class="container-small">
            <div class="cover">
                <span class="comic-book">{{ $comic['type']}}</span>
                @if (!(empty($comic['thumb'])))
                    @if (str_contains($comic['thumb'], 'https:'))
                    <img src="{{$comic['thumb']}}" alt="">
                    @else
                    <img src="https://leggi.subitoilmenu.it/image_not_found.png" alt="">
                    @endif
                @else
                    <img src="https://leggi.subitoilmenu.it/image_not_found.png" alt="">
                @endif
                <span class="gallery">view gallery</span>
            </div>
        </div>
    </div>
    <div class="container-small">
        <div class="row my-5">
            <div class="col-8">
                <h2><strong>{{ $comic['title'] }}</strong></h2>
                <div class="d-flex bg-green">
                    <div class="col-9">
                        <div class="col-auto">
                            <span><strong>U.S. Price: </strong>{{ $comic['price']}}</span>
                        </div>
                        <div class="col-auto">
                            <span>AVAILABLE</span>
                        </div>
                    </div>
                    <div class="col-3">
                        <span>CHECK</span>
                    </div>
                </div>
                @if (!(empty($comic['description'])))
                <p>{{$comic['description']}}</p>
                @else
                <p class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> DESCRIZIONE NON DISPONIBILE</p>
                @endif
            </div>
            <div class="col-4 adv">
                <span>ADVERTISEMENT</span>
                <div>
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="adv">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('comics.index')}}" class="btn btn-primary">Torna a elenco completo</a>
            </div>
        </div>
    </div>
</div>
@endsection