<?php

namespace App\Http\Controllers;

use App\Models\Filiale;
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
        /*toastr()->error("Une erreur s'est produite pendant l'opération");
        toastr()->warning("Attention,  Avertissement");
        notify()->error('Erreur');*/
        $filiales = Filiale::where('user_id',Auth::id())
        ->get();
        return view('home',compact('filiales'));
    }
}
