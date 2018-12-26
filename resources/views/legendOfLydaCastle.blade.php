@extends('base')

@section('content')
    <div class="col-9" style="font-size: 1.3rem;">
        <p style="color: #1d68a7">Ура, мы получили ключ от Лидского замка. Давай-ка узнаем, какие легенды хранит этот
            замок. А для того, чтобы
            войти и узнать легенду, нужно разгадать загадку.</p>

        <br>
        <center><a href="http://www.flash-gear.com/index.php?puz"><img src="http://www.flash-gear.com/puz1.gif"></a><br>
            <EMBED allowScriptAccess="always" allowNetworking="all"
                   src="http://three.flash-gear.com/npuz/puz.php?c=f&o=1&id=4207609&k=58001859&s=150&w=600&h=450"
                   quality=high wmode=transparent scale=noscale salign=LT bgcolor="FFFFFF" WIDTH="750" HEIGHT="600"
                   NAME="puz430823" ALIGN="" TYPE="application/x-shockwave-flash"
                   PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"/>
            <BR><a href="http://www.flash-gear.com/index.php?puz"><img
                        src="http://www.flash-gear.com/puz2.gif"><br><b><font face="Verdana"><h5>provided by
                            flash-gear.com</h5></font></b></a><br></center>
        <br>

        <p style="color: #1d68a7">Чтобы взобраться по лестнице Лидского замка и услышать легенду, необходимо найти все слова, где есть
            чередование гласных в корнях слов.</p>
        <img class="img-thumbnail img-fluid" src="{{ asset('img/mountian.jpg') }}" alt="mountain">
        <p class="font-italic">Идем дальше. Хранитель замка попроси нас помочь ему распределить слова, за это он расскажет нам легенду
            Лидского замка. </p>
        <iframe src="https://learningapps.org/watch?v=p723kht8318" style="border:0px;width:900px;height:500px"
                webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
        <p style="color: #1d68a7" class="font-italic">Задания выполнили, можно узнать легенду. Но при этом в легенде спрятано задание, которое позволит получить
            ключ, чтобы мы могли продолжить путь. Предупреждаю, если выполнишь его неправильно, придется вернуться к
            воротам замка. </p>
        <iframe src="https://learningapps.org/watch?v=pw9etst1a18" style="border:0px;width:900px;height:500px"
                webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
    </div>
    @if( app('request')->input('word') == 'победа')
        <div class="container mt-3 mb-4">
            <div class="d-flex justify-content-center">
                <a href="{{ route('legendOfMirCastle') }}" type="button" class="btn btn-primary btn-lg ">Ура, у нас есть
                    еще один ключ!</a>
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