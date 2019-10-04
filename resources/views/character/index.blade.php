@extends('layouts._master')

@section('content')
    <h1 class='title'>{{ __('character.index_title') }}</h1>
    <table class='table table-hover'>
        <thead class='thead'>
            <tr>
                <th scope='col'>{{ __('character.name') }}</th>
                <th scope='col'>{{ __('character.creation') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($characters as $character)
                <?php
                    $parsedDate = Carbon\Carbon::parse($character->created_at);
                    $displayedDate = $parsedDate->englishMonth .
                                    ' ' .
                                    $parsedDate->day .
                                    ', ' .
                                    $parsedDate->year;
                ?>
                <tr>
                    <td><a class='list-item-link' href="{{ url('characters/' . $character->id) }}"> {{ $character->name }}</a></td>
                    <td><a class='list-item-link' href="{{ url('characters/' . $character->id) }}"> ({{ $displayedDate }})</a></td>
                </tr>
            @endforeach
        </tbody>    
    </table>
@endsection
