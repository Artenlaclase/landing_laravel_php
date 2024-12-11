<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function cine()
    {
        // Retorna la vista para la página de "Cine Escolar"
        return view('gallery.cine');
    }

    public function escultura()
    {
        // Retorna la vista para la página de "Escultura Geométrica"
        return view('gallery.actividades');
    }

    public function trabajo()
    {
        // Retorna la vista para la página de "Trabajo en Equipo"
        return view('gallery.trabajo');
    }
}
