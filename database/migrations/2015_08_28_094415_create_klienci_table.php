<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlienciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klienci', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imie');
            $table->text('nazwisko');
            $table->text('PESEL');
            $table->date('data_urodzenia');
            $table->text('tel');
            $table->text('e-mail');
            $table->text('adres');
            $table->text('miejscowosc');
            $table->text('kod_pocztowy');
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
        Schema::drop('klienci');
    }
}
