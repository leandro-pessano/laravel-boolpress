@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<form class="container" action={{route('contatti.sent')}} method="post">
    @method('POST')
    @csrf
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

  <div class="form-group">
    <label for="message">Messaggio</label>
    <textarea class="form-control" id="message" rows="3" name="message"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection