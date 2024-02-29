@extends('template.skelet')
@section('title', 'Главная страница сайта')
@section('content')

        <div class="d-flex flex-row flex-wrap justify-content-left gap-5">
           @foreach ($items as $item )
           <div class="card">
                <h3 class="card-title">{{$item->title}}</h3>
                <p class="card-text">{{$item->desc}}</p>

                @foreach($item->catalogs as $cats)
                   <a
                       href="{{ route('catalog.view.item', ['catname' => $cats->alias, 'alias' => $item->alias]) }}"
                       class="btn btn-sm btn-info">{{$item->title}}</a>
                @endforeach

            </div>
           @endforeach
        </div>


@endsection
