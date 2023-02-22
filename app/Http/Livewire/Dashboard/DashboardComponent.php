<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class DashboardComponent extends Component
{
    public function render()
    {
        $user_auth = Session::get('user_auth');
        // dd($user_auth['nom']);

        return view('livewire.dashboard.dashboard-component',[
            'user_auth' => $user_auth
        ])->layout('layouts.dash');
    }
}
