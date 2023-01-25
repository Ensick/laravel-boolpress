@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>
            {{$singolo_post->id}}
        </h1>

        <p>
            {{$singolo_post->body}}
        </p>
    </div>

@endsection
