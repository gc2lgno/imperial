<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->date('fecha');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('n_noches');
            $table->integer('n_adultos');
            $table->integer('n_ninios');
            $table->unsignedBigInteger('room_id');
            $table->string('tipo_reserva');
            $table->string('status');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            // Claves foráneas
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
