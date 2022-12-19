@extends('layouts.master')
@section('content')
<section class="container">
    <div class="text"> Modifica el contacto </div>
    <form action="{{ url('/contacto') }}" method="POST">
        {{method_field('put')}}
        @csrf
      <div class="form-row">
        <div class="input-data">
          <input name="nombre" type="text" value=<?php echo $contacto -> nombre ?> required>
          <div class="underline"></div>
          <label>Nombre</label>
        </div>
        <div class="input-data">
          <input name="apellidos" type="text" value=<?php echo $contacto -> apellidos ?> required>
          <div class="underline"></div>
          <label>Apellidos</label>
        </div>
      </div>
      <div class="form-row">
        <div class="input-data">
          <input name="correo" type="text" value=<?php echo $contacto -> email ?> required>
          <div class="underline"></div>
          <label>Correo electronico</label>
        </div>
        <div class="input-data">
          <input name="numerotelefono" type="text" value=<?php echo $contacto -> telefono ?> required>
          <div class="underline"></div>
          <label>Numero de telefono</label>
        </div>
      </div>
      <div class="form-row">
        <div class="input-data textarea">
          <textarea name="consulta" cols="30" rows="10" value=<?php echo $contacto -> consulta ?> required></textarea>
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
