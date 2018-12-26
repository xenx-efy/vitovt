<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name') }}</title>

    {{--Bootstrap--}}
    <link href="http://allfont.ru/allfont.css?fonts=cyrillicold" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{--Scripts js--}}
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body background="{{ asset('img/background.jpg') }}" style="font-family: CyrillicOld; color:#B22222">
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "3072022", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
        ts.src = "https://top-fwz1.mail.ru/js/code.js";
        var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
        if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "topmailru-code");
</script><noscript><div>
        <img src="https://top-fwz1.mail.ru/counter?id=3072022;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
    </div></noscript>
<!-- //Rating@Mail.ru counter -->

<div class="container">
    <img src="{{ asset('img/Title.png') }}" class="img-fluid" alt="logo">
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                <a class="list-group-item list-group-item-action disabled">Путешествуем вместе</a>
                <a href="{{ route('home') }}" class="list-group-item list-group-item-action list-group-item-primary">Давайте
                    познакомимся</a>
                <a href="@if(Request::cookie('posOnSite') >= 1)
                {{ route('appealOfPrince') }}
                @else#@endif" class="list-group-item list-group-item-action list-group-item-primary">Обращение Витовта</a>

                <a href="@if(Request::cookie('posOnSite')  >= 2)
                {{ route('mapOfBelarus') }}
                @else#@endif"
                   class="list-group-item list-group-item-action list-group-item-primary">Карта</a>
                <a href="@if(Request::cookie('posOnSite')  >= 3)
                {{ route('legendOfGrodno') }}
                @else#@endif"
                   class="list-group-item list-group-item-action list-group-item-primary">Гродно</a>
                <a href="@if(Request::cookie('posOnSite')  >= 4)
                {{ route('legendOfLydaCastle') }}
                @else#@endif"
                   class="list-group-item list-group-item-action list-group-item-primary">Лида</a>
                <a href="@if(Request::cookie('posOnSite')  >= 5)
                {{ route('legendOfMirCastle') }}
                @else#@endif"
                class="list-group-item list-group-item-action list-group-item-primary">Мир</a>
                <a href="@if(Request::cookie('posOnSite')  >= 6)
                {{ route('legendOfRadzivil') }}
            @else#@endif"
                class="list-group-item list-group-item-action list-group-item-primary">Несвиж</a>
                <a href="@if(Request::cookie('posOnSite')  >= 7)
                {{ route('prince') }}
                @else#@endif" class="list-group-item list-group-item-action list-group-item-primary">Наказ князя Витовта </a>
                {{--<a href="@if(Request::cookie('posOnSite')  >= 8)--}}
                {{--{{ route('endOfTravel') }}--}}
                {{--@else#@endif" class="list-group-item list-group-item-action list-group-item-primary">Конец путешествия</a>--}}
                <a href="{{ route('endOfTravel') }}" class="list-group-item list-group-item-action list-group-item-primary">Конец путешествия</a>
                <a href="@if(Request::cookie('posOnSite')  >= 9)
                {{ route('letter') }}
                @else#@endif" class="list-group-item list-group-item-action list-group-item-primary">Грамота
                исследователя</a>
            </div>
        </div>
        @yield('content')
    </div>
</div>
@yield('content2')
</body>
</html>