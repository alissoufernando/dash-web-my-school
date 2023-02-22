<?php

namespace App\Http\Livewire\Dashboard\Ecole;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DetailEcoleComponent extends Component
{
    public $ecole_id;
    public $classe_id;
    public $nom;
    public $scolarite;
    public function mount($id)
    {
        $this->ecole_id = $id;

    }

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
        'classe_id',
        'nom',
        'scolarite',
        ]);
    }
    public function updated($fields)
    {
        if ($this->classe_id) {
            $this->validateOnly($fields, [
                'nom' => 'required',
                'scolarite' => 'required',
            ]);
        } else {
            $this->validateOnly($fields, [
                'nom' => 'required',
                'scolarite' => 'required',
            ]);
        }
    }
    public function saveClasse()
    {
        // dd('ok');
        if ($this->classe_id) {
            $this->validate([
                'nom' => 'required',
                'scolarite' => 'required',
            ]);
        } else {
            $this->validate([
                'nom' => 'required',
                'scolarite' => 'required',
            ]);
        }
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->post('https://myschool.herokuapp.com/api/schools/'.$this->ecole_id.'/classes', [
            'nom' => $this->nom,
            'scolarite' => $this->scolarite,
        ]);

        if ($response->successful()) {
            if ($this->classe_id) {
                session()->flash('message', 'Modification effectuée avec succès.');
            } else {

                session()->flash('message', 'Enregistrement effectué avec succès.');
            }
        } else {
            if ($this->classe_id) {
                session()->flash('message', 'Modification echoué.');
            } else {

                session()->flash('message', 'Enregistrement echoué.');
            }
        }


        $this->resetInputFields();
        $this->emit('saveClasse');
        back();
        // return redirect()->route('dashboard.detail-classes',['id' => $this->ecole_id]);

    }

    public function getElementById($id)
    {
        $this->classe_id = $id;
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->delete('https://myschool.herokuapp.com/api/classes/'.$id);
        $classe = json_decode($response->getBody());
        $this->nom = $classe->nom;
        $this->scolarite = $classe->scolarite;
    }
    public function deleteClasse($id)
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->delete('https://myschool.herokuapp.com/api/classes'.$id);
        session()->flash('message', 'cet utilisateur à été supprimer.');
        return redirect()->route('dashboard.detail-classes',['id' => $this->ecole_id]);



    }

    public function render()
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/schools/'.$this->ecole_id.'/classes');

        $response = json_decode($response->getBody());
        $classes = $response->response;
        if (!$response->success)
        {
            $classes = "";
        }
        // foreach($classes as $classe)
        // {
        //     dd($classe->nom);

        // }schools/1/matieres

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/schools/'.$this->ecole_id.'/matieres');

        $response = json_decode($response->getBody());
        $matieres = $response->response;
        if (!$response->success)
        {
            $matieres = "";
        }

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/schools/'.$this->ecole_id.'/students');

        $response = json_decode($response->getBody());
        $students = $response->response;
        if (!$response->success)
        {
            $students = "";
        }

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/schools/'.$this->ecole_id.'/events');

        $response = json_decode($response->getBody());
        $events = $response;
        if (!$response->success)
        {
            $events = "";
        }
        // foreach($events as $events)
        // {
        //     dd($events->titre);

        // }

        return view('livewire.dashboard.ecole.detail-ecole-component',[
            'classes' => $classes,
            'students' => $students,
            'matieres' => $matieres,
            'events' => $events,
        ])->layout('layouts.dash');
    }
}
