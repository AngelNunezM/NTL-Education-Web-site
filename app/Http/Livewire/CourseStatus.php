<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CourseStatus extends Component
{
    public $course;
    public $lecciones;
    public $secciones;
    public $frame;
    public $collectiones;

    public $previous, $index, $next;

    public function mount($course){
        $responseDetalles = $this->SeccionCurso();
        $responseLecciones = $this->LeccionCUrso();
        $responseCurso = Http::get('http://127.0.0.1:9000/api/Cursos/'.$course);
        $data = $responseCurso->json();
        
        $this->frame = $this->Url();
        $this->course = $data;
        $this->lecciones = $responseLecciones;
        $this->secciones = $responseDetalles;
    
       //generar la una coleccion con todas las lecciones
        
        $collect = collect($this->getRelation($this->course));
        $this->collectiones = $collect;
        
        foreach($collect as $leccion){
            $this->index = $collect->search($leccion);
            $this->next = $collect[$this->index + 1];

            if($this->index == 0){ $this->previous = null;}
            else{$this->previous = $collect[$this->index - 1];}

            if($this->index == $collect->count()-1){ $this->next = null;}
            else{$this->next = $collect[$this->index + 1];}

            break;
        }
        
        
    }

    public function changeLeccion($leccion){
        
        $nuevoindex = $this->collectiones[$this->index + $leccion];
        $this->index = $this->collectiones->search($nuevoindex);
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
    public function Url(){
        return '<iframe width="715" height="415" src="https://www.youtube.com/embed/S4IgPTwwPBw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    }

    public function getRelation($course){
        $collection = collect();
        foreach($course as $curso){  
            foreach ($this->secciones as $seccion){
                if ($seccion['IdCurso'] == $curso['Id_Cursos']){
                    foreach ($this->lecciones as $leccion){
                        if ($leccion['Id_Secciones'] == $seccion['Id_Secciones']){
                             $collection->push($leccion['Nombre']);
                        }
                    }
                }
            }
        }
        return $collection->all();
        

    }

    public function render()
    {
        
        return view('livewire.course-status');
    }
}
