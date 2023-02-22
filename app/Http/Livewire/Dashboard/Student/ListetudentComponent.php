<?php

namespace App\Http\Livewire\Dashboard\Student;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class ListetudentComponent extends Component
{
    public function render()
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/matieres');

        $response = json_decode($response->getBody());
        $matieres = $response->response;

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/students');
        $response = json_decode($response->getBody());
        $students = $response->response;
        // foreach($matieres as $matieres)
        // {
        //     dd($matieres->nom);

        // }
        $user_auth = Session::get('user_auth');

        return view('livewire.dashboard.student.listetudent-component',[
            'matieres' => $matieres,
            'students' => $students,
            'user_auth' => $user_auth
        ])->layout('layouts.dash');
    }
}
