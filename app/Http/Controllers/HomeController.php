<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Propuestas;
use App\Models\User;
use App\Models\Lineas;


class HomeController extends Controller
{
   /**
     * Create a new controller instance.
    
     * *
     * @return void
     */
    public function __construct()
    {
       
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch (Auth::user()->tipo) {
            case 'ROOT':
                $propuestas = Propuestas::all();

        
                $lineas = lineas::all();
                $user = User::all();
                return view('root/areapersonal', array('propuestas' => $propuestas, 'lineas' => $lineas, 'user' => $user) );
                break;
                
            case 'ALUM':


                $propuestas = Propuestas::all();

        
                $lineas = lineas::all();
                $user = User::all();
                //return view('alum/areapersonal');
                return view('alum/areapersonal', array('propuestas' => $propuestas, 'lineas' => $lineas, 'user' => $user) );
                break;

            case 'TUTO':
                $propuestas = Propuestas::all();

        
                $lineas = lineas::all();
                $user = User::all();
                return view('tutor/areapersonal', array('propuestas' => $propuestas, 'lineas' => $lineas, 'user' => $user) );
                break;

            default:
                return view('/');
                break;
        }
    }
    public function error404()
    {
       
       return view('error404');
    }
        

}
