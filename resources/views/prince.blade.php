@extends('base')

@section('content')
    <div class="col-9" style="font-size: 1.3rem;">
        <p>Не зная прошлого, человек не может жить настоящим. Я, князь Витовт, завещаю своим потомкам любить и беречь
            свою землю, хранить прошлое и не забывать о будущем. </p>

        <p>Много легенд знает белорусская земля. И только тот, кто любит культуру и историю своей земли, сможет стать
            достойным хранителем её традиций.
            Мои дорогие потомки, узнавайте тайны языка, храните, исследуйте и восхищайтесь теми сокровищами, которые вам
            достались в наследство.</p>
        <img class="img-fluid" src="{{ asset('img/prince.png') }}" alt="prince order">
        <h4>Воспоминания о путешествии по замкам Беларуси.</h4>
        <iframe class="mb-5" width="942" height="530" src="https://www.youtube.com/embed/mwTiWyX25zQ" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
@endsection