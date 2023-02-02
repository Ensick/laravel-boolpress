@extends('layouts.app')

@section('content')

    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h4>
                {{$singolo_post->nome}}
            </h4>
        </div>
        <div class="card-body">

            <div class="d-flex row-cols-2" style="height: 350px;">
                <div class="pb-3 pe-3 overflow-auto">
                    <h5>Ingredienti</h5>
                    <p class="card-text">{{$singolo_post->ingredienti}}</p>
                    <h5>Descrizione</h5>
                    <p class="card-text">{{$singolo_post->descrizione}}</p>
                    <h5>Difficoltà</h5>
                    <p class="card-text">{{$singolo_post->difficolta}}</p>
                    <h5>Tempo di cottura</h5>
                    <p class="card-text">{{$singolo_post->tempo_cottura}}</p>
                    <h5>Portata</h5>
                    @if($singolo_post->category)
                        <p>{{$singolo_post->category['name']}}</p>
                    @endif
                    <h5>Tipologia</h5>
                    @foreach ($singolo_post->tags as $tag)
                        <p>{{$tag->name}}</p>
                    @endforeach

                </div>

                <div class="ratio" style="--bs-aspect-ratio: 50%;">
                    <img class="object-fit-md-cover border rounded" src="{{asset("storage/$singolo_post->cover")}}" alt="img">
                </div>

            </div>
        </div>
    </div>

@endsection
