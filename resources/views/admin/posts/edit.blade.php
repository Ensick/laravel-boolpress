@extends('layouts.app')

@section('content')

<div>
    <h1>
        Modifica Post
    </h1>
</div>


<form action="{{route('admin.posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div>
        <label class="form-label">Nome</label>
        <input value="{{$post->nome}}" class="form-control" type="text" name="nome">
        @error('nome')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for="">Ingredienti</label>
        <input value="{{$post->ingredienti}}" class="form-control" type="text" name="ingredienti">
        @error('ingredienti')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for="">Descrizione</label>
        <textarea class="form-control" name="descrizione">{{$post->descrizione}}</textarea>
        @error('descrizione')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for="">Difficoltà</label>
        <input value="{{$post->difficolta}}" class="form-control" type="text" name="difficolta">
        @error('difficolta')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <label for="">Tempo di Cottura</label>
        <input value="{{$post->tempo_cottura}}" class="form-control" type="text" name="tempo_cottura">
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

                <option value="{{$category->id}}"{{$category->id == old('category_id', $post->category_id) ? 'selected':''}}>

                    {{$category->name}}

                </option>

            @endforeach

        </select>
    </div>

    <div class="my-3">

        <label for="">Tags</label>

        @foreach ($tags as $tag)

            <label for="">
                <input type="checkbox" name="tags[]" value="{{$tag->id}}" {{$post->tags->contains($tag) ? 'checked' : '' }}>
                {{$tag->name}}
            </label>

        @endforeach

    </div>

    <div class="my-3">
        <label>Aggiunta cover immagine</label>
        <input type="file" name="image" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Modifica</button>

</form>

@endsection
