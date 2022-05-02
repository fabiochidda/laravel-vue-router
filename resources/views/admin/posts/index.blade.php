@extends('layouts.app')

@section('content')

    <ul>
        @foreach ($posts as $el)
            
            <li>
                {{$post->title}}
            </li>

        @endforeach
    </ul>
    
@endsection