@extends('components.layout')
@section('content')
    <div>
        <h2>Artículos</h2>
        <div class="form-group mb-3">
            <a href="{{ route('articles.create') }}" type="button" class="btn btn-primary">Nuevo Artículo</a>
        </div>
        <div class="form-group mb-3">
            @if ($articles->count() == 0)
                <div class="alert alert-info">Sin Datos</div>
            @else
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Título</th>
                            <th>Descripción del Artículo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->description }}</td>
                                <td class="text-center"><a href="{{ route('articles.edit', $article->id) }}">
                                        <i class="far fa-edit text-success"></i></a>
                                    <form class="d-inline" action="{{ route('articles.destroy', $article->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="border: none; background: none; cursor: pointer;">
                                            <i class="far fa-trash-alt text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
