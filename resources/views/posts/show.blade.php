@extends('layouts.main')

@section('title', 'Show Post')

@section('content')
<div class="container">
    <br>
    <h1 class="mt-4">{{ $post->title }}</h1>
    <p><strong>Status:</strong> {{ $post->status }}</p>
    <p><strong>Descrição:</strong> {{ $post->description }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
