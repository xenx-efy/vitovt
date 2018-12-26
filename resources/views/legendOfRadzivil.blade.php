@extends('base')

@section('content')
    <div class="col-9" style="font-size: 1.3rem;">
        <p class="font-italic" style="color: #1d68a7">В Несвижском замке нас ждёт новая загадка. Правильно выполненное
            задание поможет получить подсказку.</p>

        <br>
        <center><a href="http://www.flash-gear.com/index.php?puz"><img src="http://www.flash-gear.com/puz1.gif"></a><br>
            <EMBED allowScriptAccess="always" allowNetworking="all"
                   src="http://four.flash-gear.com/npuz/puz.php?c=f&o=1&id=4124575&k=28845160&s=150&w=600&h=450"
                   quality=high wmode=transparent scale=noscale salign=LT bgcolor="FFFFFF" WIDTH="750" HEIGHT="600"
                   NAME="puz186094" ALIGN="" TYPE="application/x-shockwave-flash"
                   PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"/>
            <BR><a href="http://www.flash-gear.com/index.php?puz"><img
                        src="http://www.flash-gear.com/puz2.gif"><br><b><font face="Verdana"><h5>provided by
                            flash-gear.com</h5></font></b></a><br></center>
        <br>

        <p class="font-italic" style="color: #1d68a7">Как любая крепость (а это настоящий замок-крепость, даже раньше
            мост через ров к главным воротам был
            подъемный), замок имел подземные ходы, для выхода в случае осады. Говорят, был даже подземный туннель до
            Мирского замка, летнего резиденции Радзивиллов, длиной в 30 км. Говорят, Эльжбета Радзивил, последняя
            представительница знатного рода, показала один из подземных ходов, выходящих за 4 км от замка на Михальской
            горе.</p>
        <p class="font-italic" style="color: #1d68a7">Может быть в подземных туннелях и запрятаны сокровища?</p>
        <p class="font-italic" style="color: #1d68a7">Давайте и мы попытаемся найти сокровища.</p>
        <iframe src="https://learningapps.org/watch?v=pr3cjmf4518" style="border:0px;width:100%;height:500px"
                webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
        <img class="img-fluid img-thumbnail mt-3 mb-3" src="{{ asset('img/radzivil.jpg') }}" alt="radzivil">
        <iframe src="https://learningapps.org/watch?v=pcotj7dta18" style="border:0px;width:100%;height:500px"
                webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
    </div>
    @if( app('request')->input('word') == 'время')
        <div class="container mt-3 mb-4">
            <div class="d-flex justify-content-center">
                <a href="{{ route('letter') }}" type="button" class="btn btn-primary btn-lg ">Ура, у нас есть еще один
                    ключ!</a>
            </div>
        </div>
    @else
        <div class="container d-flex justify-content-center mt-4 mb-4">
            <div class="col-6">
                <h3 class="mt-2 d-flex justify-content-center">Введите ключевое слово, и продолжите путешествие</h3>
                <form action="" method="get" class="d-flex justify-content-center">
                    <input class="form-control mt-2" type="text" name="word" placeholder="Ключевое слово">
                    <input class="btn btn-primary mt-2" type="submit" value="Ввести">
                </form>
            </div>
        </div>
    @endif
@endsection