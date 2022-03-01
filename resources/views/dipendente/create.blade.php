@extends('layout')
@section('body')
<form action="{{route('dipendente.store')}}" method="POST">
    @csrf
    <input type="text" name="firstName">
    <input type="text" name="lastName">
    <select name="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
        <option value="o">Other</option>
    </select>
    <input type="date" name="birthDate">
    <input type="date" name="hireDate">
    <button type="submit" class="bg-primary"></button>
</form>
@endsection