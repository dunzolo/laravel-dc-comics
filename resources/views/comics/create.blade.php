@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>INSERISCI UN NUOVO COMIC</h1>
                    <a href="{{ route('comics.index')}}" class="btn btn-primary">Torna ad elenco completo</a>
                </div>
            </div>
        </div>
        <div>
            {{-- validazioen degli errori --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0 ps-0">
                    @foreach ($errors->all() as $error)
                        <li><i class="fa-solid fa-triangle-exclamation"></i>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <form action="{{ route('comics.store')}}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label class="control-label">TITOLO</label>
                <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
                {{-- singolo messaggio di errore --}}
                @error ('title')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label">TIPOLOGIA</label>
                <select name="type" class="form-control">
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label class="control-label">SERIES</label>
                <input type="text" name="series" class="form-control" placeholder="Inserisci la serie">
                {{-- singolo messaggio di errore --}}
                @error ('series')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label">PREZZO</label>
                <input type="text" name="price" class="form-control" placeholder="Inserisci il prezzo">
                {{-- singolo messaggio di errore --}}
                @error ('price')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label">DATA</label>
                <input type="text" name="sale_date" class="form-control" placeholder="Inserisci la data">
                {{-- singolo messaggio di errore --}}
                @error ('sale_date')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label">IMMAGINE</label>
                <input type="text" name="thumb" class="form-control" placeholder="Inserisci il link dell'immagine">
                {{-- essendo nullable, la validazione dell'errore non è obbligatorio --}}
            </div>
            <div class="form-group mb-3">
                <label class="control-label">DESCRIZIONE</label>
                <textarea class="form-control" name="description" placeholder="Inserisci la descrizione"></textarea>
                {{-- essendo nullable, la validazione dell'errore non è obbligatorio --}}
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success">Salva</button>
            </div>
        </form>
    </div>
@endsection