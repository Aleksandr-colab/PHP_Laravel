<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    $person = [
                    'name' => 'Paul Atreides',
//                    'age' => 20,
                    'age' => 15,
                    'position' => 'emperor',
                    'address' => 'Grand Palace in the city of Arrakeen on the planet Arrakis'
              ];
    return view('home', ['person' => $person]);
});

Route::get('/contacts', function () {
    $contacts = [
                    'address' => 'Grand Palace, Arrakeen, Arrakis',
                    'post_code' => 777777777,
//                    'email' => 'emperor@arrakeen.arrakis',
                    'email' => '',
                    'phone' => '8-999-999-99'
                ];
    return view('contacts', ['contacts' => $contacts]);
});
