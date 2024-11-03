@extends('components.layout')
@section('content')
    <div>
        <h2>Nuevo Usuario</h2>
        <form action="/crear-usuarios" method="POST">
            @csrf
            <div>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
