@extends('layouts.app')

@section('content')

    <a href="{{route('admin.posts.create')}}">
        <button class="btn btn-success mb-4">
            <i class="fa-solid fa-plus"></i>
        </button>
    </a>

    @foreach ($posts as $post)

        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">


                <h4 class="text-primary">
                    <a class="text-decoration-none" href="{{route('admin.posts.show',$post->id)}}">
                        {{$post->nome}}
                    </a>
                </h4>

                <div>
                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">

                        @csrf
                        @method('DELETE')

                        <div>
                            <div>
                                <a class="btn btn-primary" href="{{route('admin.posts.edit',$post->id)}}">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">

                <div class="d-flex row-cols-2" style="height: 350px;">
                    <div class="pb-3 pe-3 overflow-auto">
                        <h5>Ingredienti</h5>
                        <p class="card-text">{{$post->ingredienti}}</p>
                        <h5>Descrizione</h5>
                        <p class="card-text">{{$post->descrizione}}</p>
                        <h5>Difficoltà</h5>
                        <p class="card-text">{{$post->difficolta}}</p>
                        <h5>Tempo di preparazione</h5>
                        <p class="card-text">{{$post->tempo_cottura}}</p>
                        <h5>Portata</h5>
                        @if($post->category)
                            <p>{{$post->category['name']}}</p>
                        @endif
                        <h5>Tipologia</h5>
                        @foreach ($post->tags as $tag)
                            <p>{{$tag->name}}</p>
                        @endforeach

                    </div>

                    <div class="ratio" style="--bs-aspect-ratio: 50%;">
                        <img class="object-fit-md-cover border rounded" src="{{asset("storage/$post->cover")}}" alt="img">
                    </div>

                </div>
            </div>
        </div>
    @endforeach

    {{$posts->links()}}

@endsection
