<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion',5000);
            $table->string('descripcion_corta',2000);
            $table->string('portada');
            $table->json('galeria');
            $table->float('precio_compra');
            $table->float('precio_venta');
            $table->float('sku');
            $table->string('categoria');
            $table->float('stock');
            $table->string('proveedor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
