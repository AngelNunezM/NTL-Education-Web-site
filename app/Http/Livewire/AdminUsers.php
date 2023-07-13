<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminUsers extends Component
{
    
    public $search;

    public function edit(){
        return view('admin.edit');
    }

    public function render()
    {
        return view('livewire.admin-users', ['users' => User::where('name', 'LIKE', '%'. $this->search.'%' )->get()]);
    }
}
