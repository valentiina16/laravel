<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Marca',20);
            $table->text('Descripcion');
            $table->double('Precio',8,2);
            $table->binary('Foto')->nullable();
            $table->date('Fecha_elaboracion')->nullable();
            $table->date('Fecha_vencimiento')->nullable();
            $table->integer('Cantidad');
            $table->double('Valor_total',8,2);
            $table->string('Medio_de_pago',20);
            $table->unsignedInteger('id_clients')->nullable();
            $table->foreign('id_clients')->references('id')->on('Clients')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
