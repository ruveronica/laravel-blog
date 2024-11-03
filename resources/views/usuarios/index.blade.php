@extends('components.layout')
@section('content')
    <div>
        <h2>Usuarios</h2>
        <div>
            @if ($users->count() == 0)
                <div>
                    <p>Sin Datos</p>
                </div>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Usuario</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
