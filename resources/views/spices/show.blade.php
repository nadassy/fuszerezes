@extends('layout')

@section('content')
    <h1>{{ $spice->name }}</h1>
    <p>{{ $spice->description }}</p>
    <a href="{{ url('/spices') }}"><button>Vissza a listához</button></a>
    <a href="{{ url('/spices') }}"><button>Összes fűszer</button></a>
@endsection


