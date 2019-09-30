@extends('layouts._master')

<?php
$inputs =
  [[ 'size' => 12,
    'type'=>'text',
    'name'=>'name',
    'label'=> 'character.name',
    'value'=> ''
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'wisdom',
    'label'=> 'character.wisdom_trait',
    'value'=> ''
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'charisma',
    'label'=> 'character.charisma_trait',
    'value'=> ''
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'dexterity',
    'label'=> 'character.dexterity_trait',
    'value'=> ''
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'intelligence',
    'label'=> 'character.intelligence_trait',
    'value'=> ''
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'strength',
    'label'=> 'character.strength_trait',
    'value'=> ''
  ],
  [
    'size' => 4,
    'type'=>'number',
    'name'=>'constitution',
    'label'=> 'character.constitution_trait',
    'value'=> ''
  ]];
?>

@section('content')
    <h1 class="title">@lang('character.create_title')</h1>
    @errors(['errors' => $errors])
    @enderrors
    @form([
        'method' => 'post',
        'action' => url('characters'),
        'inputs' => $inputs,
        'buttonText' => __('form.save')
        ])
    @endform

@endsection 