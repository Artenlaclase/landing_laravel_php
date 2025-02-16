<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'message' => 'required|string',
        ]);

        // Guardar en la base de datos
        Contact::create($request->all());

        // Retornar mensaje de éxito
        return response()->json(['success' => 'Mensaje enviado correctamente.']);
    }
}
