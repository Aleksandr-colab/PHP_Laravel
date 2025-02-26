<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_database', function () {
    $newEmployee = new Employee();
    $newEmployee->first_name = 'Alexei';
    $newEmployee->last_name = 'Bikov';
    $newEmployee->age = 35;
    $newEmployee->save();
});
