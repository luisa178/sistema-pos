@extends('layouts.app')
@section('module_title')
    Crear inventario
@endsection
@section ('content')

<div class="contentInventario">
    

    <div class="contetAll">
        <div class="grid-3">
            <div class="group-input">
                <label for="nombre_producto">Nombre</label>
                <input type="text" name="nombre_producto" required>
            </div>
            <div class="group-input">
                <label for="cantidad_entrante">Cantidad entrante</label>
                <input type="number" name="cantidad_entrante" required>
            </div>
            <div class="group-input">
                <label for="cantidad_saliente">Cantidad saliente</label>
                <input type="text" name="cantidad_saliente" required>
            </div>
            <div class="group-input">
                <label for="ubicacion">Ubicación</label>
                <input type="number" name="ubicacion" required>
            </div>
        </div>
        <button type="submit">Crear</button>
        </div>
    
</div>

@endsection