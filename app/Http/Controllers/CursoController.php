<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('cursos.index');
    }

    public function create()
    {
        return "Crear curso";
    }

    public function update($idUser)
    {
        return view('cursos.update', compact('idUser'));
    }

    public function delete($idUser)
    {
        return view('cursos.delete', compact('idUser'));
    }
}
