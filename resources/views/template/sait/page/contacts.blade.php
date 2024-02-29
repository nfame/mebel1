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
                    <p>г. Вологда, ул.
                        Говоровский проезд, 6</p>
                    <p>Режим работы</p>
                    <ul>
                        <li>Пн-Пт: <b>9:30 - 17:30</b></li>
                        <li>Сб-Вс: <b>10:30 - 16:30</b></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Наше расположение</h3>
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/21/vologda/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Вологда</a><a href="https://yandex.ru/maps/21/vologda/house/govorovskiy_proyezd_6/Z0AYfgFjQEEDQFtjfX5xeXlrYQ==/?ll=39.863913%2C59.208132&utm_medium=mapframe&utm_source=maps&z=17" style="color:#eee;font-size:12px;position:absolute;top:14px;">Говоровский проезд, 6 — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=39.863913%2C59.208132&mode=whatshere&whatshere%5Bpoint%5D=39.864345%2C59.209945&whatshere%5Bzoom%5D=17&z=17" width="700" height="560" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
                <hr>
            </div>
        </div>
    </div>
@endsection
