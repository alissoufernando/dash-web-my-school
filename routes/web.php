<?php


use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\LoginComponent;
use App\Http\Livewire\Auth\RegisterComponent;
use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\Dashboard\Ecole\DetailclasseComponent;
use App\Http\Livewire\Dashboard\Ecole\DetailEcoleComponent;
use App\Http\Livewire\Dashboard\Ecole\DetailStudentComponent;
use App\Http\Livewire\Dashboard\Ecole\ListeEcoleComponent;
use App\Http\Livewire\Dashboard\Utilisateurs\DetailUserComponent;
use App\Http\Livewire\Dashboard\Utilisateurs\ListeUsersComponent;


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
Route::get('/users/{id}', DetailUserComponent::class)->name('dashboard.datail-users');
Route::get('/ecoles', ListeEcoleComponent::class)->name('dashboard.liste-ecoles');
Route::get('/ecoles/{id}', DetailEcoleComponent::class)->name('dashboard.datail-ecoles');
Route::get('/classes/{id}', DetailclasseComponent::class)->name('dashboard.datail-classes');
Route::get('/students/{id}', DetailStudentComponent::class)->name('dashboard.datail-students');
// Auth
Route::get('/login', LoginComponent::class)->name('login');
Route::get('/register', RegisterComponent::class)->name('register');




