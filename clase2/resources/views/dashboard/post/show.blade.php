@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>{{ $post->title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>{{ $post->content }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>
@endsection

