@extends('layouts.app')
@section('module_title')
    Caja
@endsection
@section('content')
    <div id="caja" class="container-25-75">

        <div class="izq">

            <select class="select" style="width: 100%;">
                <option value="1">Cliente 1</option>
                <option value="2">Cliente 2</option>
                <option value="3">Cliente 3</option>
            </select>

                    
                    <div class="grid">

                            <div class="card-client">
                                <ul>
                                    <li>Nombre:</li>
                                    <li>C.C:</li>
                                </ul>
                                <ul>
                                    <li>Maria:</li>
                                    <li>1031166467</li>
                                </ul>
                                <div class="add">
                                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.14747 1.15926C9.36997 0.691217 13.6313 0.691217 17.8538 1.15926C20.1917 1.4213 22.0778 3.26242 22.3522 5.60851C22.853 9.89122 22.853 14.2177 22.3522 18.5004C22.0778 20.8465 20.1917 22.6876 17.8538 22.9497C13.6313 23.4178 9.36996 23.4178 5.14747 22.9497C2.80956 22.6876 0.923405 20.8465 0.64908 18.5004C0.148223 14.2182 0.148223 9.89213 0.64908 5.60988C0.787836 4.47009 1.30743 3.41056 2.12366 2.60301C2.93988 1.79545 4.0049 1.2872 5.1461 1.16062M11.5006 5.24002C11.7721 5.24002 12.0325 5.34786 12.2244 5.53982C12.4164 5.73178 12.5242 5.99214 12.5242 6.26362V11.0309H17.2915C17.5629 11.0309 17.8233 11.1387 18.0153 11.3307C18.2072 11.5226 18.3151 11.783 18.3151 12.0545C18.3151 12.3259 18.2072 12.5863 18.0153 12.7783C17.8233 12.9702 17.5629 13.0781 17.2915 13.0781H12.5242V17.8453C12.5242 18.1168 12.4164 18.3772 12.2244 18.5691C12.0325 18.7611 11.7721 18.8689 11.5006 18.8689C11.2291 18.8689 10.9688 18.7611 10.7768 18.5691C10.5849 18.3772 10.477 18.1168 10.477 17.8453V13.0781H5.70976C5.43829 13.0781 5.17793 12.9702 4.98597 12.7783C4.79401 12.5863 4.68616 12.3259 4.68616 12.0545C4.68616 11.783 4.79401 11.5226 4.98597 11.3307C5.17793 11.1387 5.43829 11.0309 5.70976 11.0309H10.477V6.26362C10.477 5.99214 10.5849 5.73178 10.7768 5.53982C10.9688 5.34786 11.2291 5.24002 11.5006 5.24002Z" fill="#2B2D30"/>
                                        </svg>  
                                </div>
                            </div>
                            <div class="card-client">
                                <ul>
                                    <li>Nombre:</li>
                                    <li>C.C:</li>
                                </ul>
                                <ul>
                                    <li>Maria:</li>
                                    <li>1031166467</li>
                                </ul>
                                <div class="add">
                                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.14747 1.15926C9.36997 0.691217 13.6313 0.691217 17.8538 1.15926C20.1917 1.4213 22.0778 3.26242 22.3522 5.60851C22.853 9.89122 22.853 14.2177 22.3522 18.5004C22.0778 20.8465 20.1917 22.6876 17.8538 22.9497C13.6313 23.4178 9.36996 23.4178 5.14747 22.9497C2.80956 22.6876 0.923405 20.8465 0.64908 18.5004C0.148223 14.2182 0.148223 9.89213 0.64908 5.60988C0.787836 4.47009 1.30743 3.41056 2.12366 2.60301C2.93988 1.79545 4.0049 1.2872 5.1461 1.16062M11.5006 5.24002C11.7721 5.24002 12.0325 5.34786 12.2244 5.53982C12.4164 5.73178 12.5242 5.99214 12.5242 6.26362V11.0309H17.2915C17.5629 11.0309 17.8233 11.1387 18.0153 11.3307C18.2072 11.5226 18.3151 11.783 18.3151 12.0545C18.3151 12.3259 18.2072 12.5863 18.0153 12.7783C17.8233 12.9702 17.5629 13.0781 17.2915 13.0781H12.5242V17.8453C12.5242 18.1168 12.4164 18.3772 12.2244 18.5691C12.0325 18.7611 11.7721 18.8689 11.5006 18.8689C11.2291 18.8689 10.9688 18.7611 10.7768 18.5691C10.5849 18.3772 10.477 18.1168 10.477 17.8453V13.0781H5.70976C5.43829 13.0781 5.17793 12.9702 4.98597 12.7783C4.79401 12.5863 4.68616 12.3259 4.68616 12.0545C4.68616 11.783 4.79401 11.5226 4.98597 11.3307C5.17793 11.1387 5.43829 11.0309 5.70976 11.0309H10.477V6.26362C10.477 5.99214 10.5849 5.73178 10.7768 5.53982C10.9688 5.34786 11.2291 5.24002 11.5006 5.24002Z" fill="#2B2D30"/>
                                        </svg>  
                                </div>
                            </div>
                    </div>
                    <a href="{{route('caja.create')}}">
                <button><svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.57124 1.01697C6.66509 0.674031 9.78738 0.674031 12.8812 1.01697C14.5942 1.20897 15.9762 2.55797 16.1772 4.27697C16.5442 7.41494 16.5442 10.585 16.1772 13.723C15.9762 15.442 14.5942 16.791 12.8812 16.983C9.78738 17.326 6.66509 17.326 3.57124 16.983C1.85824 16.791 0.476236 15.442 0.275236 13.723C-0.0917452 10.5853 -0.0917452 7.41561 0.275236 4.27797C0.376903 3.44284 0.757615 2.66651 1.35567 2.07481C1.95372 1.48311 2.73407 1.11071 3.57024 1.01797M8.22624 4.00697C8.42515 4.00697 8.61591 4.08599 8.75657 4.22664C8.89722 4.36729 8.97624 4.55806 8.97624 4.75697V8.24997H12.4692C12.6681 8.24997 12.8589 8.32899 12.9996 8.46964C13.1402 8.61029 13.2192 8.80106 13.2192 8.99997C13.2192 9.19888 13.1402 9.38965 12.9996 9.5303C12.8589 9.67095 12.6681 9.74997 12.4692 9.74997H8.97624V13.243C8.97624 13.4419 8.89722 13.6326 8.75657 13.7733C8.61591 13.914 8.42515 13.993 8.22624 13.993C8.02732 13.993 7.83656 13.914 7.69591 13.7733C7.55525 13.6326 7.47624 13.4419 7.47624 13.243V9.74997H3.98324C3.78432 9.74997 3.59356 9.67095 3.45291 9.5303C3.31225 9.38965 3.23324 9.19888 3.23324 8.99997C3.23324 8.80106 3.31225 8.61029 3.45291 8.46964C3.59356 8.32899 3.78432 8.24997 3.98324 8.24997H7.47624V4.75697C7.47624 4.55806 7.55525 4.36729 7.69591 4.22664C7.83656 4.08599 8.02732 4.00697 8.22624 4.00697Z"
                        fill="white" />
                </svg>
                Registrar cliente</button>
        </div>

        <div class="drh">

            <div class="drh-hijo1">
                <div class="info-head">

                    <div class="etiqueta">
                        <p>Maria C.C 1031166467</p>
                        <div class="close">x</div>
                    </div>

                    <div class="input-container flex hor-end">
                        <input type="text" placeholder="Buscar...">
                        <button class="buttonsearch"><svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.6 18.5L10.3 12.2C9.8 12.6 9.225 12.9167 8.575 13.15C7.925 13.3833 7.23333 13.5 6.5 13.5C4.68333 13.5 3.146 12.8707 1.888 11.612C0.63 10.3533 0.000667196 8.816 5.29101e-07 7C-0.000666138 5.184 0.628667 3.64667 1.888 2.388C3.14733 1.12933 4.68467 0.5 6.5 0.5C8.31533 0.5 9.853 1.12933 11.113 2.388C12.373 3.64667 13.002 5.184 13 7C13 7.73333 12.8833 8.425 12.65 9.075C12.4167 9.725 12.1 10.3 11.7 10.8L18 17.1L16.6 18.5ZM6.5 11.5C7.75 11.5 8.81267 11.0627 9.688 10.188C10.5633 9.31333 11.0007 8.25067 11 7C10.9993 5.74933 10.562 4.687 9.688 3.813C8.814 2.939 7.75133 2.50133 6.5 2.5C5.24867 2.49867 4.18633 2.93633 3.313 3.813C2.43967 4.68967 2.002 5.752 2 7C1.998 8.248 2.43567 9.31067 3.313 10.188C4.19033 11.0653 5.25267 11.5027 6.5 11.5Z"
                                    fill="#2B2D30" />
                            </svg>
                        </button>
                    </div>
                </div>


                <div class="product-container grid-3 ">
                    <div class="product-card">
                        <img src="ruta/a/imagen1.jpg" alt="Producto 1" class="product-image">
                        <h3 class="product-name">Producto 1</h3>
                        <p class="product-description">Descripción breve del producto 1.</p>
                        <span class="product-price">$30.000</span>
                    </div>
                    <div class="product-card">
                        <img src="ruta/a/imagen2.jpg" alt="Producto 2" class="product-image">
                        <h3 class="product-name">Producto 2</h3>
                        <p class="product-description">Descripción breve del producto 2.</p>
                        <span class="product-price">$50.000</span>
                    </div>
                    <div class="product-card">
                        <img src="ruta/a/imagen2.jpg" alt="Producto 2" class="product-image">
                        <h3 class="product-name">Producto 2</h3>
                        <p class="product-description">Descripción breve del producto 2.</p>
                        <span class="product-price">$50.000</span>
                    </div>

                </div>
            </div>


            <div class="drh-hijo2">

                    <div class="detalles-pago grid-5">
                        <div class="medios-pago">

                            <button>Efectivo</button>
                            <button>Tarjeta</button>
                            <button>Descuento</button>

                        </div>
                        <div class="detalles-factura ">
                            <div class="group-input">
                                <label for="subtotal">Subtotal:</label>
                                <input type="number" name="subtotal" readonly>
                            </div>
                            <div class="group-input">
                                <label for="vat">IVA (19%):</label>
                                <input type="number" id="vat" name="vat" readonly>
                            </div>
                            <div class="group-input">
                                <label for="total">Total:</label>
                                <input type="number" name="total" readonly>
                            </div>
                            <div class="group-input">
                                <label for="amount-given">Dinero Entregado:</label>
                                <input type="number" name="amount-given">
                            </div>
                            <div class="group-input">
                                <label for="change">Cambio:</label>
                                <input type="number" name="change" readonly>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    @endsection
