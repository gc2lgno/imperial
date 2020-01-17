<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bill_id');
            $table->integer('monto');
            $table->unsignedBigInteger('tipo_pago');
            $table->string('status');
            $table->string('detalle');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            // Clave foránea
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tipo_pago')->references('id')->on('payment_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
