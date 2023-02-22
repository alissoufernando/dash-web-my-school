<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class RegisterComponent extends Component
{
    public $nom;
    public $prenoms;
    public $sexe;
    public $tel;
    public $email;
    public $mot_de_passe;

    public function register()
    {

            $this->validate([
                'nom' => 'required',
                'prenoms' => 'required',
                'tel' => 'required',
                'sexe' => 'required',
                'email' => 'required|email',
                'mot_de_passe' => 'required',

            ]);


        $response = Http::post('https://myschool.herokuapp.com/api/signup', [
            'nom' => $this->nom,
            'prenoms' => $this->prenoms,
            'tel' => $this->tel,
            'sexe' => $this->sexe,
            'email' => $this->email,
            'mot_de_passe' => $this->mot_de_passe,
        ]);

        if ($response->successful()) {
            return redirect()->route('dashboard.liste-users');
        } else {

            session()->flash('message', 'Connexion à échoué.');

        }

    }
    public function render()
    {
        return view('livewire.auth.register-component');
    }
}
