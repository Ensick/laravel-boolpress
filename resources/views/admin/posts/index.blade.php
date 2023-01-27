@extends('layouts.app')

@section('content')

    <a href="{{route('admin.posts.create')}}">
        <button class="btn btn-success mb-3">
            Crea Nuovo Post
        </button>
    </a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">TITOLO</th>
            <th scope="col">TESTO</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">EDIT</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>
                        <a href="{{'admin.posts.show',$post->id}}">
                            {{$post->title}}
                        </a>
                    </td>
                    <td>{{$post->body}}</td>
                    <td>
                        @if($post->category)
                            {{$post->category['name']}}
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.posts.edit',$post->id)}}">
                            <button class="btn btn-primary mb-3">
                                Modifica
                            </button>
                        </a>

                        <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                Elimina
                            </button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>


    {{$posts->links()}}

@endsection
