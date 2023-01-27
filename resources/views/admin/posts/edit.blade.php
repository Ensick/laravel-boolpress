@extends('layouts.app')

@section('content')

<div>
    <h1>
        Modifica Post
    </h1>
</div>


<form action="{{route('admin.posts.update',$post->id)}}" method="POST">

    @csrf
    @method('PUT')

    <div>
        <label class="form-label"></label>
        <input value="{{$post->title}}" class="form-control" type="text" name="title">
        @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for=""></label>
        <textarea class="form-control" name="body">{{$post->body}}</textarea>
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

                <option value="{{$category->id}}"{{$category->id == old('category_id', $post->category_id) ? 'selected':''}}>

                    {{$category->name}}

                </option>

            @endforeach

        </select>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Crea</button>

</form>

@endsection
