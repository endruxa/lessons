@extends('layouts.app')

@section('content')

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Hello</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                {{dd($post)}}
                    @foreach($posts as $post)
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->body}}</p>
                    <p><a class="btn btn-secondary" href="{{route('post', $post)}}" role="button">View details &raquo;</a></p>
                    @endforeach
                </div>
            </div>

            <hr>

        </div> <!-- /container -->

    </main>

@endsection
