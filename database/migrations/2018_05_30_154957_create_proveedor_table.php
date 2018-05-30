<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razon_social');
            $table->string('domicilio');        
            $table->integer('codpostal');
            $table->integer('localidad');        
            $table->integer('sucursal');   
            $table->integer('sitiva');     
            $table->unsignedInteger('localidad_id'); //clave foranea. Es el id de paises para la relacion
            $table->foreign('localidad_id')->references('id')->on('localidades');//Indica con que tabla es la 
            //relacion
            $table->unsignedInteger('sitiva_id'); //clave foranea. Es el id de paises para la relacion
            $table->foreign('sitiva_id')->references('id')->on('sitiva');//Indica con que tabla es la 
            $table->unsignedInteger('rubro_compra_id'); //clave foranea. Es el id de paises para la relacion
            $table->foreign('rubro_compra_id')->references('id')->on('rubro_compras');//Indica con que tabla es la             
            $table->unsignedInteger('sucursal_id'); //clave foranea. Es el id de paises para la relacion
            $table->foreign('sucursal_id')->references('id')->on('sucursales');//Indica con que tabla es la 
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
        Schema::dropIfExists('proveedores');
    }
}
