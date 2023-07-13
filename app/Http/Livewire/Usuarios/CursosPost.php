<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class CursosPost extends Component
{   
    public $user;
    public $course;
    public function mount(){
        $response = Http::get('http://127.0.0.1:9000/api/Cursos');
        $Course = $response->json();

        $this->course = $Course;
        

    }
    public function render()
    {
        return view('livewire.usuarios.cursos-post');
    }
}
