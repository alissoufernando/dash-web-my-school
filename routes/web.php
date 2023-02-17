<?php

use App\Http\Livewire\Dashboard\Agents\AddAgentsComponent;
use App\Http\Livewire\Dashboard\Agents\EditAgentsComponent;
use App\Http\Livewire\Dashboard\Agents\ListeAgentsComponent;
use App\Http\Livewire\Dashboard\Alerts\ListeAlertComponent;
use App\Http\Livewire\Dashboard\Articles\AddArticleComponent;
use App\Http\Livewire\Dashboard\Articles\EditArticleComponent;
use App\Http\Livewire\Dashboard\Articles\ListeArticleComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Site\WelcomeComponent;
use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\Dashboard\Products\ListeProductComponent;
use App\Http\Livewire\Dashboard\Utilisateurs\AddUserComponent;
use App\Http\Livewire\Dashboard\Utilisateurs\EditUserComponent;
use App\Http\Livewire\Dashboard\Utilisateurs\ListeUsersComponent;
use App\Http\Livewire\Site\AboutComponent;
use App\Http\Livewire\Site\AlertComponent;
use App\Http\Livewire\Site\BoutiqueComponent;
use App\Http\Livewire\Site\ContactComponent;
use App\Http\Livewire\Site\LoginComponent;
use App\Http\Livewire\Site\RegisterComponent;
use App\Http\Livewire\Site\SensiblisationComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', DashboardComponent::class)->name('dashboard');

Route::get('/users', ListeUsersComponent::class)->name('dashboard.liste-users');
Route::get('/user', AddUserComponent::class)->name('dashboard.add-users');
Route::get('/useredit', EditUserComponent::class)->name('dashboard.edit-users');




