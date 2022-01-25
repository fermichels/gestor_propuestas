<?php

namespace App\Http\Controllers;

use App\Models\lineas;
use App\Models\propuestas;
use App\Models\Solicitud;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     
     * @return \Illuminate\Http\Response
     */

    /*   Metodo para el alumno
     solicitar un tema */
    public function solicitar_index($id)
    {
        $this->middleware('auth');
        // $this->middleware('isroot');
        $solicitud = Solicitud::all();
        $propuestas = Propuestas::find($id);
        $user = User::all();
        $user = $user->where('tipo', '=','ALUM');
       // $user = User::where('tipo', '=','ALUM');
        $lineas = lineas::all();
        return view('alum.solicitar', array('propuestas' => $propuestas, 'lineas' => $lineas, 'solicitud' => $solicitud, 'user' => $user));
    }


    /* Metodo por el cual el tutor
    puede ver las solicitudes creadas
    en sus temas publicados */
    public function solicitudes()
    {
        $this->middleware('auth');
        $solicitud = Solicitud::where('tutor_id', '=', Auth::user()->id)->get();
        $user = User::all();
        $propuestas = Propuestas::all();
        $lineas = lineas::all();
        return view('tutor.versolicitudes', array('propuestas' => $propuestas, 'lineas' => $lineas, 'solicitud' => $solicitud, 'user' => $user));
    }


    //Metodo para crear una solicitud
    protected function postUpdateOrCreateSolicitud(Request $req)
    {
        $solicitud = Solicitud::find($req['id']);
        $this->validate($req, [
            'descripcion' => 'required|max:255|min:20',
        ]);
        $data = [

            'descripcion' => $req['descripcion'],
            'propuesta_id' => $req['propuesta_id'],
            'tutor_id' => $req['tutor_id'],
            'user_id' => Auth::user()->id,
            'user_id_2' => $req['user_id_2'],

        ];
        if ($req['id'] == null) {

            Solicitud::create($data);
        } else {
            $solicitud->update($data);
        }

        return redirect()->back()->with('success', 'Solicitud enviada con exito');
    }

    //Metodo borrar
    public function borraSolicitud($id)
    {
        Solicitud::destroy($id);
        return redirect()->back();
    }
}
