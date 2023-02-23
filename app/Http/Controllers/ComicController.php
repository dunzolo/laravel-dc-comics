<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    ///metodo che mostra tutti i record
    public function index(){
        $comics = Comic::all();
        //devo indicare il nome della view
        return view('comics', compact('comics'));
    }

    // metodo che recupera il singolo record
    public function show($slug){
        // con il metodo find conviene passare il parametro id
        // $comic = Comic::find($id);

        //devo passare lo slug come parametro della funzione -> filtraggio
        $comic = Comic::where('slug', $slug)->get();

        $single_comic = [
            'single_comic' => $comic[0]
        ];
        
        // chiave che andrò a richiamare nella pagina di riferimento nella view
        return view('detail', $single_comic);
    }
}
