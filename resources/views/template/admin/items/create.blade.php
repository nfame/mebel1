@extends('template.skelet')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <form class="w-full" action="{{route('admin.items.list.store')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Название вещи</label>
                        <input type="text" placeholder="Стол Бабочка" class="form-control" name="title" id="title">
                    </div>

                    <div class="mb-3">
                        <label for="alias" class="form-label">Алиас</label>
                        <input type="text" placeholder="table-babochka" class="form-control" name="alias"
                            id="alias">
                    </div>

                    <div class="mb-3">
                        <label for="article" class="form-label">Артикул</label>
                        <input type="text" placeholder="123456-78-9" class="form-control" name="article" id="article">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Категория</label>
                        <select class="form-select" name="catalog_id" id="categories">
                            @foreach ($item as $i)
                                <option value="{{ $i->id }}">{{ $i->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Цвет</label>
                        <input type="text" placeholder="Красный" class="form-control" name="color" id="color">
                    </div>

                    <div class="mb-3">
                        <label for="size" class="form-label">Размер</label>
                        <input type="text" placeholder="1x1x1 | ш в г" class="form-control" name="size"
                            id="size">

                    </div>

                    <div class="mb-3">
                        <label for="material" class="form-label">Материал</label>
                        <input type="text" placeholder="МДФ" class="form-control" name="material" id="material">
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Описание</label>
                        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control" placeholder="Тут описание"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="images">Изображение</label>
                        <input type="file" class="form-control" name="images" id="images">
                    </div>

                    <button class="btn btn-success" type="submit">Создать</button>

                </form>
            </div>
        </div>
    @endsection
