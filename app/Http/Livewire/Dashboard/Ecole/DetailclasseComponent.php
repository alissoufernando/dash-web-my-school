<?php

namespace App\Http\Livewire\Dashboard\Ecole;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DetailclasseComponent extends Component
{
    public $classe_id;
    public $student_id;
    public $nom;
    public $prenoms;
    public $nom_prenoms_pere;
    public $nom_prenoms_mere;

    public function mount($id)
    {
        $this->classe_id = $id;

    }
    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
        'student_id',
        'nom',
        'prenoms',
        'nom_prenoms_pere',
        'nom_prenoms_mere',
        ]);
    }
    public function updated($fields)
    {
        if ($this->student_id) {
            $this->validateOnly($fields, [
                'nom' => 'required',
                'prenoms' => 'required',
                'nom_prenoms_pere' => 'required',
                'nom_prenoms_mere' => 'required',
            ]);
        } else {
            $this->validateOnly($fields, [
                'nom' => 'required',
                'prenoms' => 'required',
                'nom_prenoms_pere' => 'required',
                'nom_prenoms_mere' => 'required',
            ]);
        }
    }
    public function saveStudent()
    {
        // dd('ok');
        if ($this->student_id) {
            $this->validate([
                'nom' => 'required',
                'prenoms' => 'required',
                'nom_prenoms_pere' => 'required',
                'nom_prenoms_mere' => 'required',
            ]);
        } else {
            $this->validate([
                'nom' => 'required',
                'prenoms' => 'required',
                'nom_prenoms_pere' => 'required',
                'nom_prenoms_mere' => 'required',
            ]);
        }
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->post('https://myschool.herokuapp.com/api/classes/'.$this->classe_id.'/students', [
            'nom' => $this->nom,
            'prenoms' => $this->prenoms,
            'nom_prenoms_pere' => $this->nom_prenoms_pere,
            'nom_prenoms_mere' => $this->nom_prenoms_mere,
        ]);

        if ($response->successful()) {
            if ($this->student_id) {
                session()->flash('message', 'Modification effectuée avec succès.');
            } else {

                session()->flash('message', 'Enregistrement effectué avec succès.');
            }
        } else {
            if ($this->student_id) {
                session()->flash('message', 'Modification echoué.');
            } else {

                session()->flash('message', 'Enregistrement echoué.');
            }
        }


        $this->resetInputFields();
        $this->emit('saveStudent');
        back();
        // return redirect()->route('dashboard.detail-classes',['id' => $this->ecole_id]);

    }

    public function getElementById($id)
    {
        $this->student_id = $id;
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->delete('https://myschool.herokuapp.com/api/students/'.$id);
        $classe = json_decode($response->getBody());
        $this->nom = $classe->nom;
        $this->prenoms = $classe->prenoms;
        $this->nom_prenoms_pere = $classe->nom_prenoms_pere;
        $this->nom_prenoms_mere = $classe->nom_prenoms_mere;
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
    public function render()
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/classes/'.$this->classe_id.'/students');

        $response = json_decode($response->getBody());
        $students = $response->response;
        // foreach($students as $student)
        // {
        //     dd($student->nom);

        // }
        $user_auth = Session::get('user_auth');

        return view('livewire.dashboard.ecole.detailclasse-component',[
            'students'=> $students,
            'user_auth' => $user_auth
        ])->layout('layouts.dash');
    }
}
