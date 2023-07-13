<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->TipoUsuario == 2){
            return view('instructor.courses.index');
        }
        return redirect()->route('courses.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $price = Http::get('http://127.0.0.1:9000/api/Precios/');
        $precios = $price->json();
        return view('instructor.courses.create',compact('precios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $postCurso = Http::post('http://127.0.0.1:9000/api/Cursos',[
            'Titulo' => $request->title,
            'Subtitulo' =>$request->subtitle,
            'Descripcion' => $request->description,
            'Estatus' => $request->status,
            'IdUsuario' => $request->user,
            'IdPrecio' => $request->price
        ]);
        return view('instructor.courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('instructor.courses.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($Curso)
    {
        $cursoSlug = $Curso;
         $curso = $this->get_Cursos($Curso);
         $price = Http::get('http://127.0.0.1:9000/api/Precios/');
        $precios = $price->json();
        
         
        return view('instructor.courses.edit', compact('curso','precios','cursoSlug'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $postCurso = Http::post('http://127.0.0.1:9000/api/Cursos'.$id,[
            'Titulo' => $request->title,
            'Subtitulo' =>$request->subtitle,
            'Descripcion' => $request->description,
            'Estatus' => $request->status,
            'IdUsuario' => $request->user,
            'IdPrecio' => $request->price
        ]);
        return view('instructor.courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function get_Cursos($Curso){
        
        $responseCurso = Http::get('http://127.0.0.1:9000/api/Cursos/'.$Curso);
        $data = $responseCurso->json();
        
        return $data;
    }
}
