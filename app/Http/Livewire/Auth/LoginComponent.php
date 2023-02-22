<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginComponent extends Component
{
    public $email;
    public $mot_de_passe;

    public function login()
    {

            $this->validate([
                'email' => 'required|email',
                'mot_de_passe' => 'required',

            ]);


        $response = Http::post('https://myschool.herokuapp.com/api/login', [
            'email' => $this->email,
            'mot_de_passe' => $this->mot_de_passe,
        ]);

        if ($response->successful()) {
            $apiToken = $response["token"];
            Session::put('api_token', $apiToken);
            Session::put('user_auth', $response['user']);


            // $token = Session::get('user_auth');
            // dd(Session::get('user_auth'));
            return redirect()->route('dashboard.liste-users');

        } else {

            session()->flash('message', $response["message"]);

        }

    }
    public function render()
    {
        return view('livewire.auth.login-component');
    }
}
