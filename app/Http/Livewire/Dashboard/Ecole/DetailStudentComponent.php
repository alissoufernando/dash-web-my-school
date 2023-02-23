<?php

namespace App\Http\Livewire\Dashboard\Ecole;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DetailStudentComponent extends Component
{
    public $student_id;
    public $matiere_id;
    public $note;
    public $type;
    public function mount($id)
    {
        $this->student_id = $id;
    }

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
        'note',
        'matiere_id',
        'type',
        ]);
    }
    public function saveNote()
    {
        // dd('ok');

        $this->validate([
            'note' => 'required',
            'matiere_id' => 'required',
            'type' => 'required',
        ]);

        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->post('https://myschool.herokuapp.com/api/students/'.$this->student_id.'/matieres'.$this->matiere_id.'notes', [
            'note' => $this->note,
            'type' => $this->type,
        ]);

        dd($response['success']);

        if ($response->successful()) {

            session()->flash('message', 'Enregistrement effectué avec succès.');

        } else {

            session()->flash('message', 'Enregistrement echoué.');

        }


        $this->resetInputFields();
        $this->emit('saveNote');
        back();
        // return redirect()->route('dashboard.detail-classes',['id' => $this->ecole_id]);

    }

    public function deleteNote($id)
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->delete('https://myschool.herokuapp.com/api/notes'.$id);
        session()->flash('message', 'cet utilisateur à été supprimer.');
        back();


    }
    public function render()
    {
        $token = Session::get('api_token');
        // dd($token);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/students/'.$this->student_id.'/notes');

        $response = json_decode($response->getBody());
        $notes = $response->response;
        // dd($response);

        // if (!$response->success)
        // {
        //     $notes = "";
        // }

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('https://myschool.herokuapp.com/api/matieres');

        $response = json_decode($response->getBody());
        // dd($response);

        $matieres = $response;


        return view('livewire.dashboard.ecole.detail-student-component',[
            'matieres' => $matieres,
            'notes' => $notes
        ])->layout('layouts.dash');
    }
}
