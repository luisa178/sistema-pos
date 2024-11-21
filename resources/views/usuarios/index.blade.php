@extends('layouts.app')
@section('module_title')
    Registrar usuarios
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
                <label for="direccion">Cargo</label>
                <input type="text" name="direccion" required>
            </div>
            <div class="group-input">
                <label for="direccion">Contraseña</label>
                <input type="text" name="direccion" required>
            </div>
            <button><svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.57124 1.01698C6.66509 0.674039 9.78738 0.674039 12.8812 1.01698C14.5942 1.20898 15.9762 2.55798 16.1772 4.27698C16.5442 7.41495 16.5442 10.585 16.1772 13.723C15.9762 15.442 14.5942 16.791 12.8812 16.983C9.78738 17.326 6.66509 17.326 3.57124 16.983C1.85824 16.791 0.476236 15.442 0.275236 13.723C-0.0917452 10.5853 -0.0917452 7.41562 0.275236 4.27798C0.376903 3.44285 0.757615 2.66652 1.35567 2.07482C1.95372 1.48312 2.73407 1.11072 3.57024 1.01798M8.22624 4.00698C8.42515 4.00698 8.61591 4.08599 8.75657 4.22665C8.89722 4.3673 8.97624 4.55806 8.97624 4.75698V8.24998H12.4692C12.6681 8.24998 12.8589 8.32899 12.9996 8.46965C13.1402 8.6103 13.2192 8.80106 13.2192 8.99998C13.2192 9.19889 13.1402 9.38965 12.9996 9.53031C12.8589 9.67096 12.6681 9.74998 12.4692 9.74998H8.97624V13.243C8.97624 13.4419 8.89722 13.6327 8.75657 13.7733C8.61591 13.914 8.42515 13.993 8.22624 13.993C8.02732 13.993 7.83656 13.914 7.69591 13.7733C7.55525 13.6327 7.47624 13.4419 7.47624 13.243V9.74998H3.98324C3.78432 9.74998 3.59356 9.67096 3.45291 9.53031C3.31225 9.38965 3.23324 9.19889 3.23324 8.99998C3.23324 8.80106 3.31225 8.6103 3.45291 8.46965C3.59356 8.32899 3.78432 8.24998 3.98324 8.24998H7.47624V4.75698C7.47624 4.55806 7.55525 4.3673 7.69591 4.22665C7.83656 4.08599 8.02732 4.00698 8.22624 4.00698Z" fill="white"/>
                </svg>
                 Crear</button>
        </div>
    </div>
</div>    

@endsection