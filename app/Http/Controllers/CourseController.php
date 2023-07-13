<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CourseController extends Controller
{
    public function index(){
        $responseC = Http::get('http://127.0.0.1:9000/api/Cursos');
        $data = $responseC->json();
        $user = User::all();
        return view('course.index',compact('data', 'user'));
    }

    public function show($course){
        $responseDetalles = $this->SeccionCurso();
        $responseCompetencias = $this->CompetenciaCurso();
        $responseRequerimientos = $this->RequisitosCurso();
        $responseLecciones = $this->LeccionCurso();
        $responseCursoUsuario = $this->UsuarioCurso($course);
        $responseCurso = Http::get('http://127.0.0.1:9000/api/Cursos/'.$course);
        $data = $responseCurso->json();
        
        return view('course.show', compact('data','responseDetalles','responseLecciones','responseCursoUsuario', 'responseCompetencias', 'responseRequerimientos')); 
    }

    public function enrolled(Request $request, $course){
        $user = auth()->user()->id;
        $response = Http::post('http://127.0.0.1:9000/api/CursoUsuarios',
            [
                'IdUsuario' => $request->user,
                'IdCurso' => $request->course
            ]);
        
        return redirect()->route('courses.status', $course);
    }

    public function showMyCourse($user){
        $responseCurso = Http::get('http://127.0.0.1:9000/api/Cursos/');
        $data = $responseCurso->json();
        
        $cursosUsuario = $this->Cursos($user);
        return view('course.mycourses', compact('cursosUsuario', 'data'));
    }

    public function Cursos($user){
        $coleccion = collect();
        $Matriculado = Http::get('http://127.0.0.1:9000/api/CursoUsuarios/');
        $matricula = $Matriculado->json();
        foreach($matricula as $matricula){
            if($matricula['IdUsuario'] == $user){
                $coleccion->push($matricula['IdCurso']);
            }
        }
        return $coleccion;

    }

    

    //funciones para las peticiones requeridas en el curso
    public function SeccionCurso(){
        $secciones = Http::get('http://127.0.0.1:9000/api/Secciones/');
        return $secciones->json();
    }
    public function LeccionCurso(){
        $lecciones = Http::get('http://127.0.0.1:9000/api/Lecciones/');
        return $lecciones->json();
    }

    public function RequisitosCurso(){
        $requerimientos = Http::get('http://127.0.0.1:9000/api/Requerimientos/');
        return $requerimientos->json();
    }

    public function CompetenciaCurso(){
        $competencias = Http::get('http://127.0.0.1:9000/api/Competencias/');
        return $competencias->json();
    }

    public function UsuarioCurso($course){
        $Matriculado = Http::get('http://127.0.0.1:9000/api/CursoUsuarios/');
        
        foreach($Matriculado->json() as $matricula){
            if(Auth::user()->id == $matricula['IdUsuario'] && $course == $matricula['IdCurso']){
                return true;
            }
        }
    }
}