<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard1Controller;


Route::get('/', function () {
    return view('welcome');
});

Route::get("home", function () {
    echo "ini home";
});

Route::get("home/{name}", function ($name) {
    echo "my name is : ".$name;
});

Route::get("dashboard/{halaman}", function ($halaman) {
    return view('dashboard')->with(compact("halaman"));
});

Route::resource("dashboard1", Dashboard1Controller::class);