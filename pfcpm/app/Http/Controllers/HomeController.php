<?php

namespace App\Http\Controllers;

use App\Login;
use Auth;   

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('tela_login');
    }

    public function create()
    {
        if(Auth::User()->patente == 'Soldado 1ª Classe')
        {
            return view('inicial_policial');
        }
        else
        {
            return view('inicial');
        }
            
    }

    public function store (Request $request)
    {
        

    }

    public function show(HomeController $homeController)
    {
        //
    }
}
