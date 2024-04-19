@extends('Layouts.Layout')

@section('title','Register')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h1>Registrarse</h1>
      <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" required>
          @if ($errors->has('name'))
            <div class="invalid-feedback">
              {{ $errors->first('name') }}
            </div>
          @endif
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required>
          @if ($errors->has('email'))
            <div class="invalid-feedback">
              {{ $errors->first('email') }}
            </div>
          @endif
        </div>
        <div class="mb-3">
          <label for="user_type_id" class="form-label">Tipo de usuario</label>
          <select class="form-control{{ $errors->has('user_type_id') ? ' is-invalid' : '' }}" id="user_type" name="user_type" required>
            <option value="">Seleccione...</option>
            @foreach ($user_types as $user_type)
              <option value="{{ $user_type->id }}"{{ old('user_type') == $user_type->id ? ' selected' : '' }}>{{ $user_type->name }}</option>
            @endforeach
          </select>
          @if ($errors->has('user_type_id'))
            <div class="invalid-feedback">
              {{ $errors->first('user_type_id') }}
            </div>
          @endif
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" required>
          @if ($errors->has('password'))
            <div class="invalid-feedback">
              {{ $errors->first('password') }}
            </div>
          @endif
        </div>
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
          <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="password_confirmation" name="password_confirmation" required>
          @if ($errors->has('password_confirmation'))
            <div class="invalid-feedback">
              {{ $errors->first('password_confirmation') }}
            </div>
          @endif
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </form>
      @if(session('user'))
      <hr/>
      <div class="alert alert-success">
        {{ session('user') }}
      </div>
      @endif
    </div>
  </div>
</div>
@endsection

