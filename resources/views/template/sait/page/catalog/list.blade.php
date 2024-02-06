@extends('template.skelet')
@section('content')
    <ul>
        @foreach ($cats as $cat )
        <li class="item">
            <a href="{{route('catalog.page', $cat->alias)}}">{{$cat->title}}</a>
        </li>
        @endforeach
    </ul>
@endsection
