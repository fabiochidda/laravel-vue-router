@extends('layouts.app')

@section('content')

<form action="{{ route('admin.posts.update',$post) }}" method="POST">
    @csrf

    @method('PUT')

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?: $post->title}}">
        @error('title')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="category_id">Categoria</label>
        <select class="form-control @error('published_at') is-invalid @enderror" id="category_id" name="category_id">
            <option value="">Nessuna</option>
            @foreach ($categories as $el)
                <option {{old('category_id') && old('category_id') == $el->id ? 'selected' : ''}} value="{{$el->id}}">{{$el->name}}</option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="content">Contenuto</label>
        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3">{{old('content') ?: $post->content}}</textarea>
        @error('content')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="published_at">Data di pubblicazione</label>
        <input type="date" class="form-control @error('published_at') is-invalid @enderror" id="published_at" name="published_at" value="{{old('published_at') ?: Str::substr($post->published_at, 0, 10)}}">
        @error('published_at')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">SALVA MODIFICHE</button>
</form>
    
@endsection