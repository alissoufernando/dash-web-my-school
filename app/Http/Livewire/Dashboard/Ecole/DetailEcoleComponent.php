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
    public $matiere;
    public $titre;
    public $description;
    public $lieu;
    public $date_de_debut;
    public $date_de_fin;

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
    public function resetInputFieldsEvent()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
        'titre',
        'description',
        'lieu',
        'date_de_debut',
        'date_de_fin',
        ]);
    }
    public function resetInputFieldsMatiere()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
        'matiere',

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
    public function saveEvent()
    {

        $this->validate([
            'titre' => 'required',
            'description' => 'required',
            'lieu' => 'required',
            'date_de_debut' => 'required',
            'date_de_fin' => 'required',
        ]);

        $token = Session::get('api_token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->post('https://myschool.herokuapp.com/api/schools/'.$this->ecole_id.'/events', [
            'titre' => $this->titre,
            'description' => $this->description,
            'date_de_debut' => $this->date_de_debut,
            'lieu' => $this->lieu,
            'date_de_fin' => $this->date_de_fin,
        ]);
        // dd($response['success']);

        if ($response->successful()) {
            session()->flash('message', 'Enregistrement effectué avec succès.');
        } else {
            session()->flash('message', 'Enregistrement echoué.');
        }


        $this->resetInputFieldsEvent();
        $this->emit('saveEvent');
        back();
        // return redirect()->route('dashboard.detail-classes',['id' => $this->ecole_id]);

    }
    public function saveMatiere()
    {

        $this->validate([
            'matiere' => 'required',
        ]);

        $token = Session::get('api_token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->post('https://myschool.herokuapp.com/api/schools/'.$this->ecole_id.'/matieres', [
            'matiere' => $this->matiere,

        ]);

        if ($response->successful()) {
            session()->flash('message', 'Enregistrement effectué avec succès.');
        } else {
            session()->flash('message', 'Enregistrement echoué.');
        }


        $this->resetInputFieldsMatiere();
        $this->emit('saveMatiere');
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
    public function deleteEvent($id)
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->delete('https://myschool.herokuapp.com/api/events'.$id);
        session()->flash('message', 'cet utilisateur à été supprimer.');
        back();


    }
    public function deleteStudent($id)
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->delete('https://myschool.herokuapp.com/api/students'.$id);
        session()->flash('message', 'cet utilisateur à été supprimer.');
        back();


    }
    public function deleteMatiere($id)
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->delete('https://myschool.herokuapp.com/api/matieres'.$id);
        session()->flash('message', 'cet utilisateur à été supprimer.');
        back();


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
        $events = $response->response;
        if (!$response->success)
        {
            $events = "";
        }
        // foreach($events as $event)
        // {
        //     dd($event);

        // }
        $user_auth = Session::get('user_auth');


        return view('livewire.dashboard.ecole.detail-ecole-component',[
            'classes' => $classes,
            'students' => $students,
            'matieres' => $matieres,
            'events' => $events,
            'user_auth' => $user_auth,
        ])->layout('layouts.dash');
    }
}
