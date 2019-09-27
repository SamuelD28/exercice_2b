@extends('layouts.master')

@section('content')
    <h1>@lang('personnage.show_title')</h1>
    <a href="{{ url('personnages/' . $personnage->id . '/edit' ) }}">
        <button>Modifier</button>
    </a>
    <h1>{{ $personnage->nom }}</h1>
    <h3>Sagesse : {{ $personnage->sagesse }}</h3>
    <h3>Charisme : {{ $personnage->charisme }}</h3>
    <h3>Intelligence {{ $personnage->intelligence }}</h3>
    <h3>Capacite : {{ $personnage->capacite }}</h3>
    <h3>Constitution : {{ $personnage->constitution }}</h3>
    <h3>Dexterite : {{ $personnage->dexterite }}</h3>
@endsection