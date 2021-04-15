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
     *
     * @return \Illuminate\Http\Response
     */
    public function solicitar_index($id)
    {
        $this->middleware('auth');
        // $this->middleware('isroot');
 // $this->middleware('isroot');

        $solicitud = Solicitud::all();

        $propuestas = Propuestas::find($id);
        $user = User::all();
        $lineas = lineas::all();
        return view('alum.solicitar', array('propuestas' => $propuestas, 'lineas' => $lineas, 'solicitud' => $solicitud, 'user' => $user));
    }
    public function solicitudes()
    {
        $this->middleware('auth');
        // $this->middleware('isroot');
        $solicitud = Solicitud::findOrFail(1);

        $solicitud = Solicitud::where('tutor_id', '=', Auth::user()->id)->get();



        $user = User::all();

        $propuestas = Propuestas::all();

        $lineas = lineas::all();
        return view('tutor.versolicitudes', array('propuestas' => $propuestas, 'lineas' => $lineas, 'solicitud' => $solicitud, 'user' => $user));
    }


    protected function postUpdateOrCreateSolicitud(Request $req)
    {
        $solicitud = Solicitud::find($req['id']);

        $id = Propuestas::find('id');

        $data = [

            'descripcion' => $req['descripcion'],
            'propuesta_id' => $req['propuesta_id'],
            'tutor_id' => $req['tutor_id'],
            'user_id' => Auth::user()->id,

        ];
        if ($req['id'] == null) {

            Solicitud::create($data);
        } else {
            $solicitud->update($data);
        }

        return redirect()->back();
    }
}
