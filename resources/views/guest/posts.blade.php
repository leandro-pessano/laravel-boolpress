@extends('layouts.app')
@section('content')
    <h1>Elenco post</h1>
    <div class="container">
        @foreach ($posts as $post)
            <div class="card">
            <div class="card-header">
                {{$post->title}}
            </div>
            <div class="card-body">
                <h5 class="card-title">Di: {{$post->user->name}} - <small>{{$post->created_at}}</small></h5>
                <p class="card-text">{{$post->content}}</p>
                <a href="{{route('posts.show', $post->slug)}}" class="btn btn-primary">Dettagli</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection