@extends('layout')

@section('content')
    <h1>Bejegyzések</h1>
    <form action="{{ url('/posts') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Név">
        <textarea name="content" placeholder="Szöveg"></textarea>
        <button type="submit">Létrehozás</button>
    </form>
    <ul>
        @foreach($posts as $post)
            <li><strong>{{ $post->title }}</strong>: {{ $post->content }}</li>
        @endforeach
    </ul>
@endsection
