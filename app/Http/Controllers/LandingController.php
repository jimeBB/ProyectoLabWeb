<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resena;
use App\Models\Usuario;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resena = Resena::all();
        return view('landingPage.guest', ['resena' => $resena]);
    }

    public function topQuery()
    {
        $top = Resena::orderBy('likes', 'desc')->get();
        return view('landingPage.guest', ['resena' => $top]);
    }

    public function newQuery()
    {
        $new = Resena::orderBy('created_at', 'desc')->get();
        return view('landingPage.guest', ['resena' => $new]);
    }

    public function cineQuery()
    {
        $cine = Resena::where('categoria', 'cine')->get();
        return view('landingPage.guest', ['resena' => $cine]);
    }

    public function videojuegosQuery()
    {
        $videojuegos = Resena::where('categoria', 'videojuegos')->get();
        return view('landingPage.guest', ['resena' => $videojuegos]);
    }

    public function librosQuery()
    {
        $libros = Resena::where('categoria', 'libros')->get();
        return view('landingPage.guest', ['resena' => $libros]);
    }

    public function seriesQuery()
    {
        $seriestv = Resena::where('categoria', 'tvseries')->get();
        return view('landingPage.guest', ['resena' => $seriestv]);
    }

    public function otrosQuery()
    {
        $otros = Resena::where('categoria', 'otros')->get();
        return view('landingPage.guest', ['resena' => $otros]);
    }

    public function search(Request $request)
    {
        $resena = Resena::where([
            ['titulo', '!=', Null],
            [
                function ($query) use ($request) {
                    if (($termino = $request->termino)) {
                        $query->orWhere('titulo', 'LIKE', '%' . $termino . '%')->get();
                    }
                }
            ]
        ])
            ->orderBy("id", "desc")
            ->paginate(10);

        return view('landingpage.guest', ['resena' => $resena]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resenas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = $request->input();
        $resena = new Resena();
        $resena->nombre = $arr['nombre'];
        $resena->titulo = $arr['titulo'];
        $resena->fecha_creacion = $arr['fecha_creacion'];
        $resena->categoria = $arr['categoria'];
        $resena->texto = $arr['texto'];
        $resena->likes = $arr['likes'];
        $resena->usuario_id = $arr['usuario_id'];
        $resena->save();

        return redirect()->route('resenas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Resena $resena)
    {
        return view('resenas.show', ['resena' => $resena]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Resena $resena)
    {
        return view('resenas.edit', ['resena' => $resena]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resena $resena)
    {
        $arr = $request->input();
        $resena->nombre = $arr['nombre'];
        $resena->titulo = $arr['titulo'];
        $resena->fecha_creacion = $arr['fecha_creacion'];
        $resena->categoria = $arr['categoria'];
        $resena->texto = $arr['texto'];
        $resena->likes = $arr['likes'];
        $resena->usuario_id = $arr['usuario_id'];
        $resena->save();

        return redirect()->route('resenas.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resena $resena)
    {
        $resena->delete();
        return redirect()->route('resenas.index');
    }
}
