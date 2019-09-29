@extends('layouts._master')

<?php
$inputs =
  [[ 'size' => 12,
    'type'=>'text',
    'name'=>'name',
    'label'=> 'character.name',
    'value'=> $character->name
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'wisdom',
    'label'=> 'character.wisdom_trait',
    'value'=> $character->wisdom
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'charisma',
    'label'=> 'character.charisma_trait',
    'value'=> $character->charisma
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'dexterity',
    'label'=> 'character.dexterity_trait',
    'value'=> $character->dexterity
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'intelligence',
    'label'=> 'character.intelligence_trait',
    'value'=> $character->intelligence
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'strength',
    'label'=> 'character.strength_trait',
    'value'=> $character->strength
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'constitution',
    'label'=> 'character.constitution_trait',
    'value'=> $character->constitution
  ]];
?>

@section('content')
    <h1>@lang('character.create_title')</h1>
    @errors(['errors' => $errors])
    @enderrors
    @form([
        'method' => 'post',
        'action' => url('characters'),
        'inputs' => $inputs,
        'buttonText' => 'Ajouter'
        ])
    @endform
@endsection