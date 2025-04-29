<?php

use Illuminate\Support\Facades\Route;

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
    $nome = 'Lisa';
    $messaggio = 'Benvenuta nella tua prima view Laravel!';

    return view('home', [
        'nome' => $nome,
        'messaggio' => $messaggio,
    ]);
});

Route::get('/chi-siamo', function () {
    $team = ['Alice', 'Bob', 'Charlie'];

    return view('about', [
        'titolo' => 'Chi siamo',
        'team' => $team,
    ]);
});

Route::get('/contatti', function () {
    $email = 'info@example.com';
    $telefono = '+39 123 456 789';

    return view('contact', [
        'titolo' => 'Contattaci',
        'email' => $email,
        'telefono' => $telefono,
    ]);
});