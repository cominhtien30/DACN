<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblLichchieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichchieu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('ngay');
            $table->time('gio');
            $table->integer('id_phim');
            $table->integer('id_rap');
            $table->integer('id_phong');
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
        Schema::dropIfExists('lichchieu');
    }
}
