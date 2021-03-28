@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Inserisci post</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('post.update', $post->id)}}" method="post">
    @method('PUT')
    @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" name="content" id="content" rows="3">{{$post->content}}</textarea>
        </div>

        @foreach ($tags as $tag)
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tags[]" value="{{$tag->id}}" {{$post->tags->contains($tag->id) ? 'checked' : ''}}>
            <label class="form-check-label" for="exampleCheck1">{{$tag->name}}</label>
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
</div>

@endsection