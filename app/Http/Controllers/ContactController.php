<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Valida los datos
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Aquí puedes enviar el mensaje por correo o guardarlo en la base de datos
        return back()->with('success', 'Mensaje enviado exitosamente.');
    }
}