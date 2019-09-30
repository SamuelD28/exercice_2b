@extends('layouts._master')

@section('content')
    <h1 class="title">@lang('character.index_title')</h1>
    <ul>
    @foreach($characters as $character)
        <?php
            $parsedDate = Carbon\Carbon::parse($character->created_at);
            $displayedDate = $parsedDate->englishMonth .
                             " " .
                             $parsedDate->day .
                             ", " .
                             $parsedDate->year;
        ?>
        <li>
            <a class="list-item-link" href="{{ url('characters/' . $character->id) }}">
                <span>{{ $character->name }}</span>
                <span>({{ $displayedDate }})</span>
            </a>
        </li>
    @endforeach
    </ul>
@endsection