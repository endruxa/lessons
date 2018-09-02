@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{$post->id}}</h1>
        <p>{{$post->body}}</p>

    </div>
@endsection