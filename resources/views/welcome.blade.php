@extends('layouts.master')
@section('content')
  <div id="presentacion">
    <h1>Creamos una web económica que genere clientes</h1>
    <img src="/assets/img/portada.png" alt="imgPortada">
  </div>

  <section id="servicios">
    <h1 class="subtitulo"> ¡Nuestros Servicios!</h1>
    <div class="containerTarjetas">
      <div class="tarjetas">
        <h2>Landing Page</h2>
        <p>Etiam ut urna metus. Aliquam a velit neque. Vestibulum lectus nibh, maximus nec eros ac, pharetra faucibus libero. Etiam ut urna metus. Aliquam a velit neque. Vestibulum lectus nibh, maximus nec eros ac, pharetra faucibus libero.</p>
        <form action="" >
          <button>490€ / Pago único</button>
        </form>
      </div>
      <div class="tarjetas">
        <h2>Web Avanzada</h2>
        <p>Etiam ut urna metus. Aliquam a velit neque. Vestibulum lectus nibh, maximus nec eros ac, pharetra faucibus libero. Etiam ut urna metus. Aliquam a velit neque. Vestibulum lectus nibh, maximus nec eros ac, pharetra faucibus libero.</p>
        <form action="" >
          <button>890€ / Pago único</button>
        </form>
      </div>
      <div class="tarjetas">
        <h2>Diseño Web A Medida</h2>
        <p>Etiam ut urna metus. Aliquam a velit neque. Vestibulum lectus nibh, maximus nec eros ac, pharetra faucibus libero. Etiam ut urna metus. Aliquam a velit neque. Vestibulum lectus nibh, maximus nec eros ac, pharetra faucibus libero.</p>
        <form action="" >
          <button>¿Hablamos?</button>
        </form>
      </div>
    </div>
  </section>
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
