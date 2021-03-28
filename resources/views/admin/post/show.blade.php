@extends('layouts.app')
@section('content')
<div class="container">
    @section('content')
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <h1>Titolo: {{$post->title}}</h1>
        <h2>Autore: {{$post->user->name}}</h2>
        <p>Data creazione: {{$post->created_at}} - Data ultima modifica: {{$post->updated_at}}</p>
        <p>{{$post->content}}</p>
    @endsection
</div>
@endsection
