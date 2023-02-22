<?php

namespace App\Http\Livewire\Dashboard\Ecole;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ListeEcoleComponent extends Component
{
    public $ecole_id;
    public $nom;
    public $adresse;
    public $contact;
    public $email;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
        'ecole_id',
        'nom',
        'adresse',
        'contact',
        'email',
        ]);
    }
    public function updated($fields)
    {
        if ($this->ecole_id) {
            $this->validateOnly($fields, [
                'nom' => 'required',
                'adresse' => 'required',
                'contact' => 'required',
                'email' => 'required|email',
            ]);
        } else {
            $this->validateOnly($fields, [
                'nom' => 'required',
                'adresse' => 'required',
                'contact' => 'required',
                'email' => 'required|email',
            ]);
        }
    }
    public function saveEcole()
    {
        // dd('ok');
        if ($this->ecole_id) {
            $this->validate([
                'nom' => 'required',
                'adresse' => 'required',
                'contact' => 'required',
                'email' => 'required|email',
            ]);
        } else {
            $this->validate([
                'nom' => 'required',
                'adresse' => 'required',
                'contact' => 'required',
                'email' => 'required|email',
            ]);
        }
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->post('https://myschool.herokuapp.com/api/schools',[
            'nom' => $this->nom,
            'contact' => $this->contact,
            'adresse' => $this->adresse,
            'email' => $this->email,
        ]);



        if ($response->successful()) {
            if ($this->ecole_id) {
                session()->flash('message', 'Modification effectuée avec succès.');
            } else {

                session()->flash('message', 'Enregistrement effectué avec succès.');
            }
        } else {
            if ($this->ecole_id) {
                session()->flash('message', 'Modification echoué.');
            } else {

                session()->flash('message', 'Enregistrement echoué.');
            }
        }


        $this->resetInputFields();
        $this->emit('saveEcole');

        return redirect()->route('dashboard.liste-ecoles');


    }

    public function getElementById($id)
    {
        $this->ecole_id = $id;
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->delete('https://myschool.herokuapp.com/api/schools'.$id);
        $ecole = json_decode($response->getBody());
        $this->nom = $ecole->nom;
        $this->contact = $ecole->contact;
        $this->adresse = $ecole->adresse;
        $this->email = $ecole->email;

    }
    public function deleteUser($id)
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->delete('https://myschool.herokuapp.com/api/schools'.$id);
        session()->flash('message', 'cet utilisateur à été supprimer.');
        return redirect()->route('dashboard.liste-users');



    }

    public function render()
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/schools');
        // dd($response);
        $datas = json_decode($response->getBody(), true);
        // foreach($datas as $data)
        // {
        //     dd($data);

        // }
        $user_auth = Session::get('user_auth');

        return view('livewire.dashboard.ecole.liste-ecole-component',[
            "datas" => $datas,
            'user_auth' => $user_auth
        ])->layout('layouts.dash');
    }
}
