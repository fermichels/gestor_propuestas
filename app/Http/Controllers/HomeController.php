<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   /**
     * Create a new controller instance.
     *
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
                return view('root/areapersonal');
                break;
            case 'ALUM':
                return view('alum/areapersonal');
                break;
            case 'TUTO':
                return view('tutor/areapersonal');
                break;
            default:
                return view('home');
                break;
        }
    }
}
