@extends('layouts._master')

@section('content')
    <h1 class="title">@lang('character.show_title')</h1>
    <a href="{{ url('characters/' . $character->id . '/edit' ) }}">
        <button class="btn btn-primary">@lang('form.modify')</button>
    </a>
    <h2>{{ $character->name }}</h2>
    <h3>@lang('character.wisdom_trait') : {{ $character->wisdom }}</h3>
    <h3>@lang('character.charisma_trait') : {{ $character->charisma }}</h3>
    <h3>@lang('character.intelligence_trait') {{ $character->intelligence }}</h3>
    <h3>@lang('character.strength_trait') : {{ $character->strength }}</h3>
    <h3>@lang('character.constitution_trait') : {{ $character->constitution }}</h3>
    <h3>@lang('character.dexterity_trait') : {{ $character->dexterity }}</h3>

    @foreach($equipments as $equipment)
        <h3> {{ $equipment->name }} </h3>
    @endforeach
@endsection