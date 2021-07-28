<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CorreoE;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    public function index(){
       //return view('contactanos.index');
       return view('contacto');
    }
    
    public function store(Request $request){
        
        $request->validate([   
            'nombre' => 'required|alpha|min:3|max:30',
            'email' => 'required|email',
            'telefono' => 'required|numeric|digits:10',
            'mensaje' => 'required|alpha_num|min:20',
        ]);

        $correo= new CorreoE($request->all());
        Mail::to('emmanuel.alvarez.a10@gmail.com')->send($correo);
        return redirect()->route('contacto')->with('fin','Mensaje enviado');
    }
}
