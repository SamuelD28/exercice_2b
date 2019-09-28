@extends('layouts.master')

@section('content')
    <h1>@lang('character.create_title')</h1>
    @include('partials._errorsForm')
    @include('partials._characterForm')
@endsection