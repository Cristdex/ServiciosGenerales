@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-4">
<form action="/usuarios" method="POST">
  @csrf

  <div class="form-group">
    <label for="code">Código</label>
    <input type="text" class="form-control" name="code" placeholder="Escribe el código">
  </div>

  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" placeholder="Escribe el nombre">
  </div>
  
  <div class="form-group">
    <label for="lastname">Apellido(s)</label>
    <input type="text" class="form-control" name="lastname" placeholder="Escribe los apellidos">
  </div>
  
  <div class="form-group">
      <label for="email">Email </label>
      <input type="email" class="form-control" name="email" placeholder="Escribe el correo electrónico">
      
    </div>
  <div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" class="form-control" name="password" placeholder="Contraseña">
  </div>

  <button type="submit" class="btn btn-primary">Registrar</button>
  <button type="reset" class="btn btn-danger float-right">Cancelar</button>
  
</form>
</div>
</div>
</div>
@endsection