<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmtphimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmtphim', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_phim');
            $table->integer('id_user');
            $table->string('noidung');
            $table->dateTime('ngay');
            $table->time('gio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cmtphim');
    }
}
