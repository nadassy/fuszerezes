@extends('layout')

@section('content')
    <h1>Új Fűszer Hozzáadása</h1>
    <form method="POST" action="{{ url('/spices') }}">
        @csrf
        <label for="name">Név:</label>
        <input type="text" name="name" id="name" required>
        <label for="description">Leírás:</label>
        <textarea name="description" id="description"></textarea>
        <button type="submit">Hozzáadás</button>
    </form>
    <a href="{{ url('/spices') }}"><button>Vissza a listához</button></a>
    <a href="{{ url('/spices') }}"><button>Összes fűszer</button></a>
@endsection



