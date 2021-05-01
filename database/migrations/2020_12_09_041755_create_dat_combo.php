<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatCombo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_combo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('id_lichchieu');
            $table->bigIncrements('id_user');
            $table->bigIncrements('id_combo');
            $table->bigIncrements('soluong');
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
        Schema::dropIfExists('dat_combo');
    }
}
