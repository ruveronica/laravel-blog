@extends('components.layout')
@section('content')
    <div class="container">
        <h2 class="">Nuevo Contacto</h2>
        <div class="form-group mb-3">
            <a href="{{route('contact.index')}}" type="button" class="btn btn-secondary">Atrás</a>
        </div>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Nombre:</label>
                <input type="text" id="tnameitle" name="name" class="form-control @error('name') is-invalid @enderror"
                    aria-describedby="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"
                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="address">Dirección:</label>
                <input type="text" id="address" name="address"
                    class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="phone"
                    class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
@endsection
