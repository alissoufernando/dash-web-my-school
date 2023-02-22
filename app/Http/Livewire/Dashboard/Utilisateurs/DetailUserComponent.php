<?php

namespace App\Http\Livewire\Dashboard\Utilisateurs;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DetailUserComponent extends Component
{
    public $user_id;
    public function mount($id)
    {
        $this->user_id = $id;
    }
    public function render()
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/users/'.$this->user_id.'/students');
        $students = json_decode($response->getBody());
        // foreach($students as $student)
        // {
        //     dd($student);
        // }
        return view('livewire.dashboard.utilisateurs.detail-user-component',[
            'students' => $students,
        ]);
    }
}
