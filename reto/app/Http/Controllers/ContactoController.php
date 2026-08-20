<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string',
            'stock' => 'requerid|integer|min:0',
        ]);

        Contacto::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'asunto' => $request->asunto,
            'mensaje' => $request->mensaje,
        ]);

        return back()->with('success', '¡Mensaje enviado correctamente!');
    }
}