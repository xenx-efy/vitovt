@extends('base')

@section('content')
    <div class="col-9">
        <img class="img-fluid" src="{{ asset('img/vasilek_vitovt-letter.png') }}" alt="vasilek_vitovt-letter">
    </div>
    <div class="container mt-3 mb-4">
        <div class="d-flex justify-content-center">
            <a href="{{ route('mapOfBelarus') }}" type="button" class="btn btn-primary btn-lg ">Далее Карта путешествия</a>
        </div>
    </div>
@endsection