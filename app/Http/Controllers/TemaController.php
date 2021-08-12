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


    /* Muestra los temas assignados al
    usuario del tipo alum logueado */
    public function tema_index($id)
    {
        $this->middleware('auth');
        $propuestas = Propuestas::all();
        $user = User::find($id);
        $tema = $tema = Tema::ofType(Auth::id())->get();

        if ($tema->isEmpty()) {

            $tema = Tema::byUser(Auth::id())->get();
            return view('alum.tema', array('propuestas' => $propuestas, 'tema' => $tema));
        } else

            return view('alum.tema', array('propuestas' => $propuestas, 'tema' => $tema));
    }

    /* //Metodo para asignar um tema 
    a um alumno */
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



     //Metodo para asignar un tema
    public function postUpdateOrCreateAsignacion(Request $req)
    {

        $this->validate($req, [
            'propuesta_id' => 'unique:temas',
            'user_id' => 'unique:temas',
            'user_id_2' => 'unique:temas',
        ]);
        $data = [
            'propuesta_id' => $req['propuesta_id'],
            'user_id' => $req['user_id'],
            'user_id_2' => $req['user_id_2'],
        ];

        // Cambia el estado del alum de ACT a ASG
        $propuestas = Propuestas::find($req['propuesta_id']);
        $propuestas->estado = 'ASG';
        $propuestas->save();

        Tema::create($data);
        Solicitud::destroy($req['solicitud_id']);
        return redirect()->route("versolicitudes");
    }

   //Borra solicitud
    public function destroy($id)
    {
        Solicitud::destroy($id);
        return redirect()->route('versolicitudes');
    }
}
