@extends('layouts.app')

@section('content')

<div>
    <h1>
        Crea un post
    </h1>
</div>


<form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

    <div>
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" name="nome">
        @error('nome')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for="">Ingredienti</label>
        <input value="" class="form-control" type="text" name="ingredienti">
        @error('ingredienti')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for="">Descrizione</label>
        <textarea class="form-control" name="descrizione"></textarea>
        @error('descrizione')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for="">Difficoltà</label>
        <input value="" class="form-control" type="text" name="difficolta">
        @error('difficolta')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for="">Tempo di Cottura</label>
        <input value="" class="form-control" type="text" name="tempo_cottura">
        @error('tempo_cottura')
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

    {{-- Aggiunta immagine --}}

    <div class="my-3">
        <label>Aggiunta cover immagine</label>
        <input type="file" name="image" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Crea</button>

</form>

@endsection
