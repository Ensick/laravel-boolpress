@extends('layouts.app')

@section('content')

<div>
    <h1>
        Crea un post
    </h1>
</div>


<form action="{{route('admin.posts.store')}}" method="POST">

    @csrf

    <div>
        <label class="form-label"></label>
        <input class="form-control" type="text" name="title">
        @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for=""></label>
        <textarea class="form-control" name="body"></textarea>
        @error('body')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="my-3">
        <label for="">Categoria</label>
        <select class="form-control" name="category_id" id="">
            <option value="">Seleziona Categoria</option>
            @foreach ($categories as $category)

                <option value="{{$category->id}}">
                    {{$category->name}}
                </option>

            @endforeach

        </select>
    </div>

    <div class="my-3">

        <label for="">Tags</label>

        @foreach ($tags as $tag)

            <label for="">
                <input type="checkbox" name="tags[]" value="{{$tag->id}}">
                {{$tag->name}}
            </label>

        @endforeach

    </div>

    <button type="submit" class="btn btn-primary mt-3">Crea</button>

</form>

@endsection
