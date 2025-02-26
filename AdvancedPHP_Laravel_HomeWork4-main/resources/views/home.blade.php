@extends('layouts.default')

@section('content')
    @if($person['age'] > 18)
        <b> {{ $person['age'] }} </b>
    @else
        <i>указанный человек слишком молод.<i>
    @endif
@stop
