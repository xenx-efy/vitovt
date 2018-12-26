@extends('base')

@section('content')

    <div class="col-9">
        <blockquote class="blockquote text-danger text-right">
            <p class="mb-0">История - свидетель прошлого, свет истины,</p>
            <p>живая память, учитель жизни, вестник старины.</p>
            <footer class="blockquote-footer">Автор: <cite title="Source Title">Цицерон</cite></footer>
        </blockquote>
        <img src="{{ asset('img/vasilek.png') }}" class="img-fluid" alt="vasilek, korennoi jitel of minecraft">
    </div>

    <div class="container d-flex justify-content-center mt-4 mb-4">
        <div class="col-6">
            <h3 class="mt-2 d-flex justify-content-center">Давайте познакомимся!</h3>
            <form action="{{ route('form.store') }}" method="POST">
                @csrf
                <input class="form-control mt-2" type="text" placeholder="Город" name="city">
                <input class="form-control mt-2" type="text" placeholder="Школа" name="school">
                <input class="form-control mt-2" type="text" placeholder="Фамилия" name="lastName">
                <input class="form-control mt-2" type="text" placeholder="Имя" name="name">
                <input class="btn btn-primary mt-2" type="submit" value="Вперед!">
            </form>
        </div>
    </div>
@endsection