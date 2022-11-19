<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\colis;
use Illuminate\Support\Facades\DB;

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
        if(Auth::user()->role == "admin"){
            $dataAdmin = User::all();
            return view('ajout-admin', ['donnees'=>$dataAdmin]);
        }
        elseif(Auth::user()->role == "livreur"){
            $dataClient = User::all();
            return view('l-demande-colis', ['donnees'=>$dataClient]);

        }
        else{
            $dataEventRbk1 ==colis::all();
           

            return view('dashbord', [ 'donnees1'=>$dataEventRbk1]);

            


        }
        //dd(Auth::user()->role);
       // return view('home');
    }
}
