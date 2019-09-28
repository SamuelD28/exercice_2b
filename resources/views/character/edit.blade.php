@extends('layouts.master')

@section('content')
  <h1>@lang('character.edit_title')</h1>
  @include('partials._characterForm')
@endsection