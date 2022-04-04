<?php

namespace App\Http\Controllers;

use App\Models\Dipendente;
use Illuminate\Http\Request;

class DipendenteController extends Controller
{
    function index()
    {
        return response()->json(Dipendente::all());
    }
    
    function store()
    {
        $dipendente = new Dipendente($_REQUEST);
        $dipendente->save();
        return response()->json($dipendente);
    }
    
    function update(Dipendente $dipendente)
    {
        $dipendente->update($_REQUEST);
        return response()->json($dipendente);
    }
    function show(Dipendente $dipendente){
        return response()->json($dipendente);
    }
    function destroy(Dipendente $dipendente)
    {
        $dipendente->delete();
        return response()->json('deleted with success');
    }
}
