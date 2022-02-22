@extends('layout')
@section('body')
<h1>Dipendenti</h1>
<a class="bg-success">Aggiungi</a>
<table class="table table-striped table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
        <th scope="col">Sesso</th>
        <th scope="col">Data di nascita</th>
        <th scope="col">Hire Date</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    @foreach ($dipendenti as $dipendente)
    <tr>
        <td>{{$dipendente->id}}</td>
        <td>{{$dipendente->firstName}}</td>
        <td>{{$dipendente->lastName}}</td>
        <td>{{$dipendente->gender}}</td>
        <td>{{$dipendente->birthDate}}</td>
        <td>{{$dipendente->timestamps}}</td>
        <td><form><button type="submit" class="bg-danger">Elimina</button></form></td>
    </tr>
    @endforeach
</table>
@endsection