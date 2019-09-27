@extends('layouts.master')

@section('content')
    <h1>@lang('character.index_title')</h1>
    <ul>
    @foreach($characters as $character)
        <li>
            <a href="{{ url('characters/' . $character->id) }}">{{ $character->name }} </a>
        </li>
    @endforeach
    </ul>
@endsection