<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/debug-auth', function () {
    return [
        'guard'      => auth()->guard()->getName(),
        'user_id'    => auth()->id(),
        'user_roles' => auth()->user()?->getRoleNames(),
    ];
});
