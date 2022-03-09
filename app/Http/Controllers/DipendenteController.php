<?php

namespace App\Http\Controllers;

use App\Models\Dipendente;
use Illuminate\Http\Request;

class DipendenteController extends Controller
{
    function index()
    {
        return view('dipendente.index', ['dipendenti'=>Dipendente::latest()->paginate(3)->withQueryString()]);
    }
    function create()
    {
        return view('dipendente.create');
    }
    function store()
    {
        $dipendente = new Dipendente($_REQUEST);
        $dipendente->save();
        return redirect('dipendente');
    }
    function edit()
    {
        return view('dipendente.edit');
    }
    function update(Dipendente $dipendente)
    {
        $dipendente->update($_REQUEST);
    }
    function destroy(Dipendente $dipendente)
    {
        $dipendente->delete();
    }
}
