@extends('layouts.app')
@section ('content')
<div class="contentProductos">
    <form action="{{route('productos.store')}}" method="post">
        @csrf
        <div class="grid-2">
            <div class="izq">
                <div class="group-input">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required>
                </div>
                <div class="group-input">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" id="" cols="30" rows="10" required ></textarea>
                </div>
                <div class="group-input">
                    <label for="descripcion_corta">Descripción corta</label>
                    <textarea name="descripcion_corta" id="" cols="30" rows="5" required ></textarea>
                </div>
            </div>
            
            <div class="drh">
                <div class="group-input">
                    <label for="portada">Portada</label>
                    <input type="file" accept="image/*" name="portada" >
                </div>
                <div class="group-input">
                    <label for="galeria">Galeria</label>
                    <input type="file" accept="image/*" name="galeria" multiple >
                </div>
            </div>
        </div>
        <div class="grid-3">
            <div class="group-input">
                <label for="precio_venta">Precio venta</label>
                <input type="number" name="precio_venta" required>
            </div>
            <div class="group-input">
                <label for="precio_compra">Precio compra</label>
                <input type="number" name="precio_compra" required>
            </div>
            <div class="group-input">
                <label for="sku">Sku</label>
                <input type="number" name="sku" required>
            </div>
            <div class="group-input">
                <label for="categoria">Categoría</label>
                <input type="text" name="categoria" required>
            </div>

            <div class="group-input">
                <label for="proveedor">Proveedor</label>
                <input type="text" name="proveedor" required>
            </div>
        </div>
        <button type="submit">enviar</button>
    </form>
    
</div>

@endsection