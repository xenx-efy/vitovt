@extends('base')

@section('content')
    <div class="col-6">
        <img class="img-fluid" src="{{ asset('img/gramota.png') }}" alt="gramota"/>
        <h2 class="text">{{Request::cookie('name')}}  {{Request::cookie('lastName')}}</h2>
    </div>
@endsection