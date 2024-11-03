@extends('components.layout')
@section('content')
    <div class="container">
        <h2 class="">Nuevo Artículo</h2>
        <div class="form-group mb-3">
            <a href="{{route('articles.index')}}" type="button" class="btn btn-secondary">Atrás</a>
        </div>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                    aria-describedby="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="description">Descripción:</label>
                <input type="text" id="description" name="description"
                    class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
@endsection
