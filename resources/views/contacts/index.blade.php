@extends('components.layout')
@section('content')
    <div>
        <h2>Contactos</h2>
        <div class="form-group mb-3">
            <a href="{{route('contact.create')}}" type="button" class="btn btn-primary">Nuevo Contacto</a>
        </div>
        <div class="form-group mb-3">
            @if ($contacts->count() == 0)
                <div class="alert alert-info">Sin Datos</div>
            @else
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->address }}</td>
                                <td>{{ $contact->phone }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
