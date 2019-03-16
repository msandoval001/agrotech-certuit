<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_cultivo');
            $table->integer('id_productor');
            $table->integer('unidad');
            $table->float('cantidad');
            $table->string('descripcion');
            $table->date('fecha_siembra');
            $table->date('fecha_cosecha');
            $table->string('estatus');
            $table->float('precio_unidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
