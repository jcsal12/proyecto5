@extends('layouts.master')
@section('content')
<section class="container">
    <div class="text"> Contacta con nosotros </div>
    <form action="#">
      <div class="form-row">
        <div class="input-data">
          <input type="text" required>
          <div class="underline"></div>
          <label>Nombre</label>
        </div>
        <div class="input-data">
          <input type="text" required>
          <div class="underline"></div>
          <label>Apellidos</label>
        </div>
      </div>
      <div class="form-row">
        <div class="input-data">
          <input type="text" required>
          <div class="underline"></div>
          <label>Correo electronico</label>
        </div>
        <div class="input-data">
          <input type="text" required>
          <div class="underline"></div>
          <label>Numero de telefono</label>
        </div>
      </div>
      <div class="form-row">
        <div class="input-data textarea">
          <textarea cols="30" rows="10" required></textarea>
          <div class="underline"></div>
          <label>Consulta</label>
        </div>
      </div>
      <div class="form-row submit-btn">
        <div class="input-data">
          <div class="inner"></div>
          <input type="submit" value="Enviar">
        </div>
      </div>
    </form>
  </section>
@stop
