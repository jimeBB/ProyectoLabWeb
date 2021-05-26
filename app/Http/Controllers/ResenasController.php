<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Resena;
use App\Models\Usuario;
use App\Events\LikeNotification;
use Illuminate\Support\Facades\Auth;


class ResenasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resena = Resena::all();
        return view('resenas.index', ['resena' => $resena]);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $arr = $request->input();
        $resena = new Resena();
        $resena->nombre = $user->name;
        $resena->titulo = $arr['titulo'];
        $resena->fecha_creacion = $arr['fecha_creacion'];
        $resena->categoria = $arr['categoria'];
        $resena->url = $arr['url'];
        $resena->texto = $arr['texto'];
        $resena->likes = 4;
        $resena->usuario_id = $user->id;

        $resena->save();

        return redirect()->route('landingpage.index');
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

  
    public function showUser( Resena $resena)
    {
        
        return view('resenas.userShow', ['resena' => $resena]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Resena $resena)
    {
        return view('resenas.edit');
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
        $resena->url = $arr['url'];
        $resena->texto = $arr['texto'];
        $resena->likes = $arr['likes'];
        $resena->usuario_id = $arr['usuario_id'];
        $resena->save();

        return redirect()->route('resenas.index');
    }

    

    public function updateLikes(Request $request, $id){
        
        
        $resena = Resena::find($id);
       
        $resena->likes = $resena->likes + 1;
        $resena -> save();
        
        event(new LikeNotification('hello world'));
        return response()->json($resena);
        
        
       
    }


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
