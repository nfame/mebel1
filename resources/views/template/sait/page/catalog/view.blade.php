@extends('template.skelet')
@section('content')

<div class="container">
    <div class="row">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Images</th>
                    <th>Описание</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @if($item->getFirstMediaUrl('images') = 0)
                <td>
                    <img src="https://placebear.com/200/300" alt="{{$item->title}}">
                </td>
                @else
                    <td>
                        {{-- <img src="{{ $item->getFirstMediaUrl->('iamges')->getUrl('thumb') }}"> --}}
                        <img src="{{$item->getFirstMedia('images')->getUrl('thumb')}}" alt="">
                    </td>
                @endif
                    <td>
                        <h3>{{$item->title}}</h3>
                        <small><b>Артикул :</b>{{$item->article}}</small>
                        <hr>
                        <h5>Описание</h5>
                        <p>{{$item->desc}}</p>
                        <div>
                            <ul>
                                <li>Цвет : {{$item->color}}</li>
                                <li>Материал : {{$item->material}}</li>
                                <li>Габариты : От {{$item->size}}</li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

