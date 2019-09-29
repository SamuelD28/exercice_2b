@extends('layouts._master')

<?php
  $inputs = [
    [
      'size' => 12,
      'type'=>'text',
      'name'=>'name',
      'label'=> 'equipment.name',
      'value'=> ''
    ]
  ]
?>

@section('content')
    <h1>@lang('character.edit_title')</h1>

    @errors(['errors' => $errors])
    @enderrors

    <h1>{{ $character->name }}</h1>
    <h3>@lang('character.wisdom_trait') : {{ $character->wisdom }}</h3>
    <h3>@lang('character.charisma_trait') : {{ $character->charisma }}</h3>
    <h3>@lang('character.intelligence_trait') {{ $character->intelligence }}</h3>
    <h3>@lang('character.strength_trait') : {{ $character->strength }}</h3>
    <h3>@lang('character.constitution_trait') : {{ $character->constitution }}</h3>
    <h3>@lang('character.dexterity_trait') : {{ $character->dexterity }}</h3>

    <h2>Ajouter equipement</h2>
    @form([
      'method' => 'post',
      'action' => 'characters' . '/' . $character->id . '/equipments',
      'inputs' => $inputs,
      'buttonText' => 'Ajouter'
      ])
    @endform

    @foreach($equipments as $equipment)
        <h3> {{ $equipment->name }} </h3>
    @endforeach
@endsection