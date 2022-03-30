<?php

namespace App\Http\Controllers;

use App\Models\Commande;
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
        if(Auth::user()->is_admin)
        {
            $commandes = Commande::orderBy('created_at', 'DESC')->get() ;

            return view('AdminLTE/index', compact('commandes'));
        }
        else
        {
            $commandes = Commande::orderBy('created_at', 'DESC')
                                    ->where('user_id', Auth::user()->id)
                                    ->where('statut', false)
                                    // ->paginate(2) ;
                                    ->get();

            return view('home', compact('commandes'));
        }

    }
}
