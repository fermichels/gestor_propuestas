<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use App\Models\Propuestas;
use App\Models\User;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

$instanciaSolicitud = new SolicitudController();
class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     **
     * @return \Illuminate\Http\Response
     */
    public function solicitud_index()
    {
        global $instanciaSolicitud;
        $solicitud = $instanciaSolicitud->solicitudes();
    }


    public function tema_indexx()
    {
        $tema = Tema::byUser(Auth::id())->get();

        $propuestas = Propuestas::all();
        $user = User::all();
       
        return view('alum.tema', array('propuestas' => $propuestas, 'tema' => $tema, 'user' => $user));
    }


    
    public function tema_index($id)
    {
        $this->middleware('auth');
        
        $propuestas = Propuestas::all();
         $user = User::find($id);
        
        
        
         
        $tema = $tema = Tema::ofType(Auth::id())->get();

        if($tema->isEmpty()) {

            $tema = Tema::byUser(Auth::id())->get();
            return view('alum.tema', array('propuestas' => $propuestas, 'tema' => $tema));
        } else
       
         return view('alum.tema', array('propuestas' => $propuestas, 'tema' => $tema));
         
    }


    public function tema_index2($id)
	{
        $user = User::find($id);
        $propuestas = Propuestas::all();

		$tema = $tema = Tema::ofType(Auth::id())->get();
       
           
			return view('alum.tema', array('propuestas' => $propuestas, 'tema' => $tema));
	
		
		
	}

    public function asignar_index($id)
    {
        //print_r($id);
        $tema = Tema::all();

        $propuestas = Propuestas::all();
        $user = User::all();
        $solicitud = Solicitud::find($id);
        return view('tutor.asignartema', array('propuestas' => $propuestas, 'tema' => $tema, 'user' => $user, 'solicitud' => $solicitud));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postUpdateOrCreateAsignacion(Request $req)
	{
        $this->validate($req, [
            'propuesta_id' => 'unique:temas',
            'user_id'=> 'unique:temas',
            'user_id_2'=> 'unique:temas',
        ]);
        $data = [
            'propuesta_id'=> $req['propuesta_id'],
            'user_id'=> $req['user_id'],
            'user_id_2'=> $req['user_id_2'],			
		];
        Tema::create($data);
        Solicitud::destroy($req['solicitud_id']);
		return redirect()->route("versolicitudes");
        
    }
   
    /**
     * Store a newly created resource in storage.
     
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(Tema $tema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(Tema $tema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tema $tema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Solicitud::destroy($id);
        return redirect()->route('versolicitudes');
    }
}
