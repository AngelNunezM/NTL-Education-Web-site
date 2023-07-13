<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        if (Auth::user()->TipoUsuario == 3){
           
            return view('admin.index');
        }
        return redirect()->route('courses.index');
        
    }
    public function CursosAproved(){
        $responseCurso = Http::get('http://127.0.0.1:9000/api/Cursos/');
        $data = $responseCurso->json();
        return view('admin.Cursos', compact('data'));
    }
}
