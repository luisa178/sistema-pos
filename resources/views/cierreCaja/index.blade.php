@extends('layouts.app')
@section('module_title')
    Cierre de Caja
@endsection
@section ('content')
<div class="contentAll">
    
        <div class="group-input">
            <label for="pago-efectivo">Efectivo</label>
            <input type="number" name="pago-efectivo" required>
        </div>
        <div class="group-input">
            <label for="pago-tarjeta">Tarjeta</label>
            <input type="number" name="pago-tarjeta" required>
        </div>
        <div class="group-input">
            <label for="pago-transferencia">Transferencias</label>
            <input type="number"number name="pago-transferencia" required>
            <button type="submit">Declarar formas de pago</button>
        </div>
@endsection