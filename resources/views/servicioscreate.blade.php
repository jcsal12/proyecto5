@extends('layouts.master')
@section('content')
<div class="row">
       <div class="col-xs-6 col-sm-4 col-md-3 text-center">


               <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
               <h4 style="min-height:45px;margin:5px 0 10px 0">
                   id: {{$contacto->id}}
                   <br>
                   nombre: {{$contacto->nombre}}
                   <br>
                   apellidos: {{$contacto->apellidos}}
               </h4>
           </a>

       </div>


   </div>
@stop
