<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'descripcion_corta',
        'portada',
        'galeria',
        'precio_compra',
        'precio_venta',
        'sku',
        'categoria',
        'stock',
        'proveedor',
    ];
}
