@extends('base')

@section('content')
    <div class="col-9">
        <img class="img-fluid " src="{{ asset('img/mapOfBelarus.png') }}" alt="svitok">
    </div>

    <div class="container mt-3 mb-4">
        <div class="d-flex justify-content-center">
            <a href="{{ route('legendOfGrodno') }}" type="button" class="btn btn-primary btn-lg ">Начнем путешествие</a>
        </div>
    </div>
@endsection