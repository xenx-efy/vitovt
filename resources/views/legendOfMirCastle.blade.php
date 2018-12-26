@extends('base')

@section('content')
    <div class="col-9" style="font-size: 1.3rem;">
        <p class="font-italic" style="color: #1d68a7">Перед нами будет один из самых красивых замков Беларуси. </p>
        <p>С XV века на южной замковой стене, высоко над землей, можно разглядеть каменную баранью голову. По рассказам
            старожил, раньше её рога украшал золотой крест, судьба которого в наши дни неизвестна. Предполагается, что
            голова служила оберегом от вражеских нападений на крепость. Также есть поверье, что если голову достать из
            стены, то Мирский замок полностью рухнет и никто, и никогда не сможет его восстановить.</p>
        <p class="font-italic" style="color: #1d68a7">А вы попробуйте восстановить правило, с помощью которого будете
            продолжить путешествие.</p>
        <br>
        <center><a href="http://www.flash-gear.com/index.php?puz"><img src="http://www.flash-gear.com/puz1.gif"></a><br>
            <EMBED allowScriptAccess="always" allowNetworking="all"
                   src="http://three.flash-gear.com/npuz/puz.php?c=f&o=1&id=4207612&k=41261679&s=150&w=600&h=450"
                   quality=high wmode=transparent scale=noscale salign=LT bgcolor="FFFFFF" WIDTH="750" HEIGHT="600"
                   NAME="puz493343" ALIGN="" TYPE="application/x-shockwave-flash"
                   PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"/>
            <BR><a href="http://www.flash-gear.com/index.php?puz"><img
                        src="http://www.flash-gear.com/puz2.gif"><br><b><font face="Verdana"><h5>provided by
                            flash-gear.com</h5></font></b></a><br></center>
        <br>
        <p class="font-italic" style="color: #1d68a7">Запомни крепко накрепко это правило, без него тебе не справиться с
            приведениями замка.</p>
        <iframe src="https://learningapps.org/watch?v=p723kht8318" style="border:0px;width:100%;height:500px"
                webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
        <p class="font-italic" style="color: #1d68a7">Ты смог выполнить правильно задание. А теперь я расскажу одну из легенд замка. Но не забывай, продолжить путь
            ты сможешь только, когда правильно прочитаешь легенду.</p>
        <iframe src="https://learningapps.org/watch?v=pcst69c8n18" style="border:0px;width:900px;height:500px"
                webkitallowfullscreen="true" mozallowfullscreen="true">
        </iframe>
    </div>
    @if( app('request')->input('word') == 'легенда')
        <div class="container mt-3 mb-4">
            <div class="d-flex justify-content-center">
                <a href="{{ route('legendOfRadzivil') }}" type="button" class="btn btn-primary btn-lg ">Ура, у нас есть
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