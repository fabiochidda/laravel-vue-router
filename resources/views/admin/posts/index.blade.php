@extends('layouts.app')

@section('content')

<div class="container">
    <ul>
        <li><a href="{{route('admin.posts.create')}}">Aggiungi un post</a></li>
    </ul>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Categoria</th>
            <th scope="col">Tag</th>
            <th scope="col">Data di pubblicazione</th>
            <th scope="col">Data di creazione</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $el)
                <tr>
                    <td>
                        {{$el->id}}
                    </td>
                    <td>
                        {{$el->title}}
                    </td>
                    <td>
                        {{$el->slug}}
                    </td>
                    <td>
                        {{$el->category ? $el->category->name : 'null'}}
                    </td>
                    <td>
                        @foreach ($el->tags as $el)
                            <span class="badge badge-primary">{{$el->name}}</span>
                        @endforeach
                    </td>
                    <td>
                        {{$el->published_at}}
                    </td>
                    <td>
                        {{$el->created_at}}
                    </td>
                    <td>
                        <a href="{{route('admin.posts.edit',$el)}}">Modifica</a>
                    </td>
                    <td>
                        <form action="{{route('admin.posts.destroy',$el)}}" method="POST">
                            @csrf

                            @method('DELETE')

                            <button type="submit">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection