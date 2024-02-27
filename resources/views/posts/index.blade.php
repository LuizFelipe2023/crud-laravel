@extends('layouts.main')

@section('title', 'Index')

@section('content')
<div class="container">
    <br>
    <h1 class="mt-4 text-center">Lista de Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Novo Post</a>
    <ul class="list-group">
        @forelse ($posts as $post)
        <li class="list-group-item d-flex justify-content-between align-items-center mb-2">
            <div>
                <span>{{ $post->title }} - {{ $post->status }}</span>
            </div>
            <div class="btn-group" role="group">
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">Detalhes</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm ml-1">Editar</a>
                <form method="POST" action="{{ route('posts.destroy', $post->id) }}" onsubmit="return confirm('Tem certeza que deseja excluir este post?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm ml-1">Excluir</button>
                </form>
            </div>
        </li>
        @empty
        <li class="list-group-item">Nenhum post encontrado.</li>
        @endforelse
    </ul>
</div>
@endsection
