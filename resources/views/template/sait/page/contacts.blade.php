@extends('template.skelet')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Контакты</h3>
                <hr>
                <div class="contacts-box">
                    <ul>
                        <li>Телефон: (881232) 987654</li>
                        <li>Телефон: (881232) 456789</li>
                    </ul>
                    <ul>
                        <li>Email для заказов: <a href="#">email.to@email.ru</a></li>
                        <li>Email для рекламы: <a href="#">email.to.ads@email.ru</a></li>
                    </ul>
                    <p>г. Вологда, ул. Мира, дом 72, офис 404</p>
                    <p>Режим работы</p>
                    <ul>
                        <li>Пн-Пт: <b>9:30 - 17:30</b></li>
                        <li>Сб-Вс: <b>10:30 - 16:30</b></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Наше расположение</h3>
                <hr>
            </div>
        </div>
    </div>
@endsection
