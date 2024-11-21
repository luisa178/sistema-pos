@extends('layouts.app')

@section('content')
        @foreach ($productos as $producto)  
            <ul>
                <li>{{$producto->nombre}}</li>
                <li>{{$producto->descripcion}}</li>
                <li>{{$producto->descripcion_corta}}</li>
                <li>{{$producto->portada}}</li>
                <li>{{$producto->galeria}}</li>
                <li>{{$producto->precio_compra}}</li>
                <li>{{$producto->precio_venta}}</li>
                <li>{{$producto->sku}}</li>
                <li>{{$producto->categoria}}</li>
                <li>{{$producto->stock}}</li>
                <li>{{$producto->proveedor}}</li>
            </ul>
        @endforeach
   
@endsection

