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
    <h1 class='title'>{{ __('character.edit_title') }}</h1>

    @errors(['errors' => $errors])
    @enderrors

    <h3>{{ $character->name }}</h3>
    
    @include('character.displaytraits')

    <h3>{{ __('equipment.add_equipment') }}</h3>
    @form([
        'method' => 'post',
        'action' => 'characters' . '/' . $character->id . '/equipments',
        'inputs' => $inputs,
        'buttonText' => 'Ajouter'
      ])
    @endform
    
    <ul class='mt-3'>
        @foreach($equipments as $equipment)
            <li>{{ $equipment->name }}</li>
        @endforeach
    </ul>
@endsection
