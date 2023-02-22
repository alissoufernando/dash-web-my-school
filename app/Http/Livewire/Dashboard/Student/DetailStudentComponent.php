<?php

namespace App\Http\Livewire\Dashboard\Student;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class DetailStudentComponent extends Component
{
    public function render()
    {
        $user_auth = Session::get('user_auth');

        return view('livewire.dashboard.student.detail-student-component',[
            'user_auth' => $user_auth,
        ]);
    }
}
