@extends('template.skelet')
@section('content')


<div class="d-flex flex-row justify-content-between">

@foreach ( $cats->items as $item )


    <div class="card" style="max-width: 15rem">
     @if($item->getFirstMediaUrl('images') == null)
        <img src="https://placebear.com/600/350" alt="{{$item->title}}">
        @else
        <img src="{{$item->getFirstMedia('images')->getUrl('thumb')}}" class="card-img-top" alt="{{$item->title}}">
        @endif
        <div class="card-body">
            <div class="card-title">{{$item->title}}</div>
             <div class="card-text">{{$item->desc}}.</div>
             <div class="card-button mt-2">
                 @foreach($item->catalogs as $catalog)
                     <a class="btn btn-primary" href="{{ route('catalog.view.item', ['catname' => $catalog->alias, 'alias' => $item->alias]) }}">{{$item->title}}</a>
                 @endforeach

             </div>
         </div>

</div>


@endforeach
</div>
@endsection
