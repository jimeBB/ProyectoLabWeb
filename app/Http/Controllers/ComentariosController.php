<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Resena;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentario = Comentario::all();
        return view('comentarios.index', ['comentario' => $comentario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comentarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Resena $resena)
    {
       
        
        $date = Carbon::now('America/Mexico_City');
        $dateBlock = Carbon::parse('2030-10-05 23:00:00', 'America/Mexico_city');
        $user = Auth::user();
        $arr = $request->input();
        $comentario = new Comentario();
        $comentario->nombre = $user->name;
        $comentario->fecha = $date;
        $comentario->texto = $arr['texto'];
        $comentario->likes = 4;
        $comentario->save();
        $resenaid = $request->resena;
        
        $resenaF = Resena::find([$resenaid]);
        $comentario->resena()->attach($resenaF);
        
        return Redirect::back()->withErrors(['msg', 'The Message']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario, Resena $resena)
    {
        return view('comentarios.show', ['comentario' => $comentario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        return view('comentarios.edit', ['comentario' => $comentario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        $arr = $request->input();
        $comentario->nombre = $arr['nombre'];
        $comentario->fecha = $arr['fecha'];
        $comentario->texto = $arr['texto'];
        $comentario->likes = $arr['likes'];
        $comentario->save();
        
        return redirect()->route('comentarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        return redirect()->route('comentarios.index');
    }
}