<?php

use App\Http\Livewire\About;
use App\Http\Livewire\AddBankDetails;
use App\Http\Livewire\BuyRent;
use App\Http\Livewire\HomeAdmin;
use App\Http\Livewire\HomeClient;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeFree;
use App\Http\Livewire\Login;
use App\Http\Livewire\PasswordRecovery;
use App\Http\Livewire\PasswordReset;
use App\Http\Livewire\Register;
use App\Http\Livewire\SeeMore;
use App\Http\Livewire\TermosCondições;

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
Route::get('/', HomeFree::class)->name('home');
Route::get('/sobre', About::class)->name('about');
Route::get('/conta-bancaria', AddBankDetails::class);
Route::get('/compra-venda', BuyRent::class)->name('buyrent');
Route::get('/administrador', HomeAdmin::class)->name('admin');
Route::get('/user', HomeClient::class)->name('client');
Route::get('/login', Login::class)->name('login.user');
Route::get('/recuperacao-password', PasswordRecovery::class)->name('recovery.user');
// Route::get('/nova-password', PasswordReset::class)->name('home');
Route::get('/registro-usuario', Register::class)->name('register.user');
Route::get('/ver-mais', SeeMore::class)->name('see.more');

Route::get('/logout', [HomeClient::class, 'logout'])->name('logout');

Route::get('/termo', TermosCondições::class)->name('aaa');;



