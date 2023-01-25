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

    <button type="submit" class="btn btn-primary mt-3">Crea</button>

</form>

@endsection
