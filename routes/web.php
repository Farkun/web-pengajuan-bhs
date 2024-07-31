<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/superadmin', function () {
    return view('superadmin.dashboard');
})->name('superadmin.dashboard');

Route::get('/superadmin/daftarakun', function () {
    return view('superadmin.daftarakun');
})->name('superadmin.daftarakun');

Route::get('/superadmin/tambahakun', function () {
    return view('superadmin.tambahakun');
})->name('superadmin.tambahakun');

Route::get('/home', function () {
    return view('layout.main');
});

Route::get('/pengaju', function () {
    return view('pengaju.dashboard');
})->name('pengaju.dashboard');

Route::get('/pengaju/dana', function () {
    return view('pengaju.dana');
})->name('pengaju.dana');

Route::get('/pengaju/status', function () {
    return view('pengaju.status');
})->name('pengaju.status');

Route::get('/pengaju/result', function () {
    return view('pengaju.result');
})->name('pengaju.result');

Route::get('/approval', function () {
    return view('approval.status');
})->name('approval.status');

Route::get('/accountant', function () {
    return view('accountant.dashboard');
})->name('accountant.dashboard');

Route::get('/accountant/data', function () {
    return view('accountant.data');
})->name('accountant.data');

Route::get('/accountant/detail', function () {
    return view('accountant.detail');
})->name('accountant.detail');

Route::get('/bendahara', function () {
    return view('bendahara.dashboard');
})->name('bendahara.dashboard');

Route::get('/bendahara/status', function () {
    return view('bendahara.status');
})->name('bendahara.status');

Route::get('/bendahara/detail', function () {
    return view('bendahara.detail');
})->name('bendahara.detail');

Route::get('/bendahara/laporan', function () {
    return view('bendahara.laporan');
})->name('bendahara.laporan');

Route::get('/login', function () {
    return view('login.login');
})->name('login.login');

Route::get('/ubahpw', function () {
    return view('login.ubahpw');
})->name('login.ubahpw');