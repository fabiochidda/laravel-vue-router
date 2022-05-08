@extends('layouts.app')

@section('content')

<form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
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
        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3"></textarea>
        @error('content')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="published_at">Data di pubblicazione</label>
        <input type="date" class="form-control @error('published_at') is-invalid @enderror" id="published_at" name="published_at">
        @error('published_at')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">AGGIUNGI</button>
</form>
    
@endsection