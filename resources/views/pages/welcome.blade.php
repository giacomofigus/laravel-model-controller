@extends('layouts.app')

@section('main')
<main>
    <h1>Movies</h1>
    <ul>
        @foreach($movies as $element)
            <li>{{ $element['title'] }}</li>
        @endforeach

    </ul>
</main>
@endsection