<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Jugadore;
use App\Models\Partido;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $proximoPartido = Partido::where('fecha', '>' , now())->orderBy('fecha')->first();
        $ultimosPartidos = Partido::where('fecha', '<' , now())->orderBy('fecha', 'desc')->take(3)->get();
        //dd($ultimosPartidos);
        $jugadores = Jugadore::all();
        $title = 'CB Al-Qázeres Extremadura';
        return view('front.home', compact('title', 'proximoPartido', 'jugadores', 'ultimosPartidos'));
    }
}
