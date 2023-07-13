<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CoursesIndex extends Component
{
    public $courses;
    public $TotalAlumnas;
    

    public function mount(){
        $responseCurso = Http::get('http://127.0.0.1:9000/api/Cursos/');
        $data = $responseCurso->json();
;        $this->courses = $data;
    }

   
    public function render()
    {

        return view('livewire.instructor.courses-index');
    }
}
