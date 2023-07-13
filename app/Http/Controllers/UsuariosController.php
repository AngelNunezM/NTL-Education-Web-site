<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuariosController extends Controller
{
    
    public function showProfile($profile){
        $response = Http::get('http://127.0.0.1:9000/api/Perfiles/'.$profile);
        $perfil = $response->json();
        
        
        $responseC = Http::get('http://127.0.0.1:9000/api/Cursos/');
        $cursos = $responseC->json();
        $cursosTotales = $this->totalcursos($profile, $cursos);
        return view('profile.profile', compact('perfil','cursosTotales'));
    }

    public function totalcursos($perfil, $cursos){
        $total = 0;
        foreach($cursos as $TotalCursos){
            if($TotalCursos['IdUsuario']== $perfil){
                $total++;
            }
        }
        return $total;
    }
}
