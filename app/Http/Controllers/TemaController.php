<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use App\Models\Propuestas;
use App\Models\User;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     **
     * @return \Illuminate\Http\Response
     */

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
         $tema = Tema::byUser(Auth::id())->get();
        
        
         return view('alum.tema', array('propuestas' => $propuestas, 'tema' => $tema));
         
    }

   

    public function asignar_index($id)
    {
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
        $tema = Tema::find( $req['id'] );
        
        $data = [
            'propuesta_id'=> $req['propuesta_id'],
            'user_id'=> $req['user_id'],
			
		];
        
            Tema::create($data);
    
		return redirect()->back();
    
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
    public function destroy(Tema $tema)
    {
        //
    }
}
