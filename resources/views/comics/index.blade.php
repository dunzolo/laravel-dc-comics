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
                        <img src="{{$comic['thumb']}}" alt="">
                        <div class="show-icon">
                            <a href="{{ route('comics.show', ['comic' => $comic['id']])}}" class="btn btn-info btn-sm btn-square" title="Dettaglio">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('comics.edit', ['comic' => $comic['id']])}}" class="btn btn-warning btn-sm btn-square" title="Modifica">
                                <i class="fas fa-edit"></i>
                            </a>
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
@endsection