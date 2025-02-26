@extends('layouts.default')

@section('content')
    @if($contacts['email'])
        <b> {{ $contacts['email'] }} </b>
    @else
        <i>Адрес электронной почты не указан.</i>
    @endif
@stop
