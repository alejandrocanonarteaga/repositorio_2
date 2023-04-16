@extends('dashboard.master')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Crear nuevo post</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @include('dashboard.post._form')
        </div>
    </div>
@endsection

