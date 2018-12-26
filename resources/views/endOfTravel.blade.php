@extends('base')

@section('content')
    <div class="col-9" style="font-size: 1.3rem;">
        <p>Ребята, давайте проверим, хорошо ли вы усвоили материал. Чтобы получить грамоту от князя Витовта, вам нужно
            сразиться за звание мастера. А для этого необходимо вспомнить все задания, которые выполняли по дороге. Если
            вы справитесь, то получите грамоту. Предъявите эту грамоту своему учителю. Надеюсь, что вас ожидает приятный
            сюрприз.</p>

        <iframe src="https://learningapps.org/watch?v=ptonsj9wj18" style="border:0px;width:100%;height:500px"
                webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>

    </div>
@endsection

@section('content2')
    <div class="container d-flex align-items-end mb-3 mt-3">
            <div class="col-4">
                <img class="img-fluid" src="{{ asset('img/kidWithPost.png') }}" alt="kid with post">
            </div>
            <div class="col-8">
                <iframe src="https://learningapps.org/watch?v=pmti0xyv318" style="border:0px;width:100%;height:500px"
                        webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
            </div>
    </div>
    <div class="container d-flex justify-content-center">
        <a href="{{ route('letter') }}" class="btn btn-primary active" role="button" aria-pressed="true">Сокровища</a>
    </div>
@endsection