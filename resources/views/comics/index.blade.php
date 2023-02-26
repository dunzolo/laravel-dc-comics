{{-- includiamo il layout nel quale inserisco il contenuto --}}
@extends('layouts.app')

{{-- vado in serire il contenuto delimitato da section --}}
@section('content')
<div id="comics">
    <div class="container">
        <span class="top-label-light-blue">Current series</span>
        <div class="row">
            <div class="d-flex justify-content-end">
                <a href="{{ route('comics.create')}}" class="btn btn-primary">Aggiungi</a>
            </div>
            @foreach ($comics as $comic)
            <div class="card">
                    {{-- tra parentesi quadre metto il nome del parametro con il relativo valore --}}
                    <div class="card-image">
                        @if (!(empty($comic['thumb'])))
                            @if (str_contains($comic['thumb'], 'https:'))
                            <img src="{{$comic['thumb']}}" alt="">
                            @else
                            <img src="https://leggi.subitoilmenu.it/image_not_found.png" alt="">
                            @endif
                        @else
                            <img src="https://leggi.subitoilmenu.it/image_not_found.png" alt="">
                        @endif
                        <div class="show-icon">
                            <ul class="mb-0 ps-0 d-flex">
                                <li class="p-1">
                                    <a href="{{ route('comics.show', ['comic' => $comic['id']])}}" class="btn btn-info btn-sm btn-square" title="Dettaglio">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li class="p-1">
                                    <a href="{{ route('comics.edit', ['comic' => $comic['id']])}}" class="btn btn-warning btn-sm btn-square" title="Modifica">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                                <li class="p-1">
                                    <form action="{{ route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="confirm-delete" class="btn btn-sm btn-square btn-danger delete-button" title="Cancella" data-title="{{ $comic->title }}">
                                            <i class="fas fa-trash text-black"></i>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-title">
                        <span>{{ $comic['title'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="bottom-btn">
            <button class="btn-light-blue">Load more</button>
        </div>
    </div>
</div>
@include('modals.modal_delete');
@endsection