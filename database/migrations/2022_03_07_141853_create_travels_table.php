<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            // id e time stamp li genera in automatico
            $table->id();
            $table->timestamps();
            // nome pacchetto
            $table->string("package",100);
            // destinazione del viaggio
            $table->string("destination",100);
            // tipo del pacchetto
            $table->string("type",100);
            // prezzo (immaginando sia un intero a cifra tonda)
            $table->mediumInteger("price");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
