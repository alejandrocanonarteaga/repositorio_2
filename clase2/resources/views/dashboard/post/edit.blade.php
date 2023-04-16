@extends('dashboard.master')

@section('content')
<form action="{{ route('post.update', $post->id) }}" method="POST">
@method('PUT')
@include('dashboard.post._form', ['btnText' => 'Actualizar'])
</form>
@endsection