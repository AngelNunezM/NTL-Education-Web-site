<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Http;

class CoursePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function enrolled(User $user, $curso){
        return true;
    }

    
}
