<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // CHIAVE-> utilizzare i valori degli attrivuti name dei campi input
        $request->validate([
            'title' => 'required | max:100',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required | max:10',
            'series' => 'required | max:50',
            'sale_date' => 'required',
            'type' => 'required | max:30'
        ]);

        // verrà creato un token ma verrà gestito da laravel
        $form_data = $request->all();

        $new_comic = new Comic();

        $new_comic->fill($form_data);

        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // se non trova comic restituisce 404
        $comic = Comic::findOrFail($id);
        $single_comic = [
            'comic'=> $comic
        ];
        return view('comics.show', $single_comic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // se non trova comic restituisce 404
        $comic = Comic::findOrFail($id);
        $data = [
            'comic'=> $comic
        ];
        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);

        // CHIAVE-> utilizzare i valori degli attrivuti name dei campi input
        $request->validate([
            'title' => 'required | max:100',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required | max:10',
            'series' => 'required | max:50',
            'sale_date' => 'required',
            'type' => 'required | max:30'
        ]);

        $form_data = $request->all();

        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
