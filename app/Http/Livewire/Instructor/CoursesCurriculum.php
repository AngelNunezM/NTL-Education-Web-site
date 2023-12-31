<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;

class CoursesCurriculum extends Component
{
    public $course;
    
    public function mount($course){
        $this->course = $course;
    }

    public function render()
    {
        return view('livewire.instructor.courses-curriculum')->layout('layouts.instructor');
    }
}
