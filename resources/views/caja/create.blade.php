@extends('layouts.app')
@section('module_title')
    Registrar cliente
@endsection
@section('content')
<div class="contentClientes">
    
    <div class="contetAll">
        <div class="grid-3">
            <div class="group-input">
                <label for="nombre_proveedor">Nombre</label>
                <input type="text" name="nombre_proveedor" required>
            </div>
            <div class="group-input">
                <label for="nit">Apellido</label>
                <input type="number" name="nit" required>
            </div>
            <div class="group-input">
                <label for="correo">Correo</label>
                <input type="text" name="correo" required>
            </div>
            <div class="group-input">
                <label for="telefono">Telefono</label>
                <input type="number" name="telefono" required>
            </div>
            <div class="group-input">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" required>

                <button type="submit">enviar</button>
            </div>
        </div>
    </div>
</div>    

@endsection