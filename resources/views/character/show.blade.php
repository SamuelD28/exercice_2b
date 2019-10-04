@extends('layouts._master')

@section('content')
    <h1 class='title'>{{ __('character.show_title') }}</h1>
    <h3>{{ $character->name }}</h3>

    @include('character.displaytraits')

    <h3>{{ __('equipment._') }}</h3>
    <ul>
        @foreach($equipments as $equipment)
            <li>{{ $equipment->name }}</li>
        @endforeach
    </ul>
    <a href="{{ url('characters/' . $character->id . '/edit' ) }}">
        <button class='btn btn-primary'>{{ __('form.modify') }}</button>
    </a>
@endsection
