@extends('layouts.master')

@section('content')
    <h1>Liste de personnages</h1>
    <ul>
    @foreach($personnages as $personnage)
        <li>
            <a href="{{ url('personnages/' . $personnage->id) }}">{{ $personnage->nom }} </a>
        </li>
    @endforeach
    </ul>
@endsection