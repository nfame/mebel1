@extends('template.skelet')
@section('title', 'Главная страница сайта')
@section('content')

    <div class="row">
        <div class="col-md-12">
           @foreach ($items as $item )
           <div class="card">
                <h3 class="card-title">{{$item->title}}</h3>
                <p class="card-text">{{$item->desc}}</p>
                <a href="#" class="btn btn-sm btn-info">Посмотреть на товар</a>
            </div>
           @endforeach
        </div>
    </div>

@endsection
