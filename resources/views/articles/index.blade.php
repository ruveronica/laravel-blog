@extends('components.layout')
@section('content')
    <div>
        <h2>Artículos</h2>
        <div class="form-group mb-3">
            <a href="{{route('articles.create')}}" type="button" class="btn btn-primary">Nuevo Artículo</a>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->description }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
