@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex items-center">
                <a class="btn btn-sm btn-success" href="#">Добавить категорию</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Название</th>
                        <th>ссылка</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item )
                    <tr>
                        <td>{{$item->title}}</td>
                        <td><a href="{{route('catalog.page', $item->alias)}}">{{env('APP_URL')}}/catalog/{{$item->alias}}</a></td>
                        <td>
                            <div>
                                <a class="btn btn-sm btn-outline-info" href="#">Изменить</a>
                                <a class="btn btn-sm btn-outline-danger" href="#">Удалить</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>
</div>
@endsection
