<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandaCultivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demanda_cultivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_comprador');
            $table->integer("id_cultivo");
            $table->integer("cantidad");
            $table->integer("id_oferta");
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
        Schema::dropIfExists('demanda_cultivos');
    }
}
