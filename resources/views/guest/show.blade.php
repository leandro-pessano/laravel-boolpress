@extends('layouts.app')
@section('content')
    <div class="container">
            <div class="card">
            <div class="card-header">
                {{$post->title}}
            </div>
            <div class="card-body">
                <h5 class="card-title">Di: {{$post->user->name}} - <small>{{$post->created_at}}</small></h5>
                <p class="card-text">{{$post->content}}</p>
            </div>
        </div>
    </div>
@endsection