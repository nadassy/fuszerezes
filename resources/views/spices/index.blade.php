@extends('layout')

@section('content')
    <h1>Fűszerek</h1>
    <form method="GET" action="{{ url('/spices') }}">
        <input type="text" name="search" placeholder="Keresés...">
        <button type="submit">Keresés</button>
    </form>
    <ul>
        @foreach ($spices as $spice)
            <li>
                <h2><a href="{{ url('/spices', $spice->id) }}">{{ $spice->name }}</a></h2>
                <p>{{ $spice->description }}</p>
            </li>
        @endforeach
    </ul>
    <a href="{{ url('/spices') }}"><button>Összes fűszer</button></a>
@endsection





