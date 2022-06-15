@extends('layouts.principal')

@section('contenido')
    <div class="row">
        <h1>
            Catalogo de productos
        </h1>
    </div>

    @if(session('mensajito'))
    <div class="row">
        <p>{{session('mensajito')}} 
            <a href="   {{route('cart.index')  }}">Ir al carrito</a>
        </p>
    </div>
    @endif

    @foreach($productos as $producto)
   
    <div class="card">
        <div class="card-content">
            <img src="{{ asset('img/'.$producto->imagen) }}" width="100%">
        </div>
        <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#{{ $producto->id }}">Nombre: </a></li>
                <li class="tab"><a href="#{{ $producto->id }}1">Descripción: </a></li>
                <li class="tab"><a href="#{{ $producto->id }}2">Precio: </a></li>
            </ul>
        </div>
        <div class="card-content grey lighten-4">
            <div id="{{ $producto->id }}">{{ $producto->nombre}}</div>
            <div id="{{ $producto->id }}1">{{ $producto->desc }}</div>
            <div id="{{ $producto->id }}2">{{ $producto->precio }}</div>
            
        </div>
        <div class="card-action">
            <a href="{{ route('productos.show' , $producto->id) }}">Detalles</a>
        </div>
    </div>
    @endforeach

@endsection