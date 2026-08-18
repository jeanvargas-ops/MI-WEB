<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;

Route::get('/', function () {
    $productos = Producto::all();
    return view('inicio', compact('productos'));
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credenciales = [
        'email' => $request->input('email'),
        'password' => $request->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        return redirect('/productos/nuevo');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
});

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

Route::get('/productos/nuevo', function () {
    return view('productos-nuevo');
})->middleware('auth');

Route::post('/productos/nuevo', function (Request $request) {
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
    ]);

    Producto::create([
        'nombre' => $request->input('nombre'),
        'precio' => $request->input('precio'),
        'descripcion' => $request->input('descripcion'),
    ]);

    return back()->with('exito', 'Producto agregado correctamente a SQLite.');
})->middleware('auth');