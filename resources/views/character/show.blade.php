@extends('layouts._master')

@section('content')
    <h1>@lang('character.show_title')</h1>
    <a href="{{ url('characters/' . $character->id . '/edit' ) }}">
        <button>@lang('form.modify')</button>
    </a>
    <h1>{{ $character->name }}</h1>
    <h3>@lang('character.wisdom_trait') : {{ $character->wisdom }}</h3>
    <h3>@lang('character.charisma_trait') : {{ $character->charisma }}</h3>
    <h3>@lang('character.intelligence_trait') {{ $character->intelligence }}</h3>
    <h3>@lang('character.strength_trait') : {{ $character->strength }}</h3>
    <h3>@lang('character.consitution_trait') : {{ $character->constitution }}</h3>
    <h3>@lang('character.dexterity_trait') : {{ $character->dexterity }}</h3>
@endsection