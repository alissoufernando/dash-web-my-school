<?php

namespace App\Http\Livewire\Dashboard\Utilisateurs;

use GuzzleHttp\Client;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ListeUsersComponent extends Component
{
    public $user_id;
    public $nom;
    public $prenoms;
    public $sexe;
    public $tel;
    public $email;
    public $mot_de_passe;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
        'user_id',
        'nom',
        'prenoms',
        'sexe',
        'tel',
        'email',
        'mot_de_passe',
        ]);
    }
    public function updated($fields)
    {
        if ($this->user_id) {
            $this->validateOnly($fields, [
                'nom' => 'required',
                'prenoms' => 'required',
                'tel' => 'required',
                'sexe' => 'required',
                'email' => 'required|email',
                'mot_de_passe' => 'required',

            ]);
        } else {
            $this->validateOnly($fields, [
                'nom' => 'required',
                'prenoms' => 'required',
                'tel' => 'required',
                'sexe' => 'required',
                'email' => 'required|email',
                'mot_de_passe' => 'required',


            ]);
        }
    }
    public function saveUser()
    {
        if ($this->user_id) {
            $this->validate([
                'nom' => 'required',
                'prenoms' => 'required',
                'tel' => 'required',
                'sexe' => 'required',
                'email' => 'required|email',
                'mot_de_passe' => 'required',


            ]);
        } else {
            $this->validate([
                'nom' => 'required',
                'prenoms' => 'required',
                'tel' => 'required',
                'sexe' => 'required',
                'email' => 'required|email',
                'mot_de_passe' => 'required',

            ]);
        }
        // dd('ok');

        $response = Http::post('https://myschool.herokuapp.com/api/signup', [
            'nom' => $this->nom,
            'prenoms' => $this->prenoms,
            'tel' => $this->tel,
            'sexe' => $this->sexe,
            'email' => $this->email,
            'mot_de_passe' => $this->mot_de_passe,
        ]);
            // dd($response['message']);

        if ($response->successful()) {
            if ($this->user_id) {
                session()->flash('message', 'Modification effectuée avec succès.');
            } else {

                session()->flash('message', 'Enregistrement effectué avec succès.');
            }
        } else {
            if ($this->user_id) {
                session()->flash('message', 'Modification echoué.');
            } else {

                session()->flash('message', 'Enregistrement echoué.');
            }
        }


        $this->resetInputFields();
        $this->emit('saveUser');

        back();


    }

    public function getElementById($id)
    {
        $this->user_id = $id;
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->delete('https://myschool.herokuapp.com/api/users'.$id);
        $user = json_decode($response->getBody());
        $this->nom = $user->nom;
        $this->prenoms = $user->prenoms;
        $this->sexe = $user->sexe;
        $this->tel = $user->tel;
        $this->email = $user->email;

    }
    public function deleteUser($id)
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->delete('https://myschool.herokuapp.com/api/users'.$id);
        session()->flash('message', 'cet utilisateur à été supprimer.');
        return redirect()->route('dashboard.liste-users');



    }
    public function render()
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/users');
        $datas = json_decode($response->getBody(), true);
        // foreach($datas as $data)
        // {
        //     dd($data);

        // }
        $user_auth = Session::get('user_auth');

        return view('livewire.dashboard.utilisateurs.liste-users-component',[
            'datas' => $datas,
            'user_auth' => $user_auth,
        ])->layout('layouts.dash');
    }
}
