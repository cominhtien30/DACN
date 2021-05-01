<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPhim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phim', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tenphim');
            $table->string('tentienganh');
            $table->string('image');
            $table->string('nsx');
            $table->string('theloai');
            $table->string('quocgia');
            $table->string('daodien');
            $table->string('dienvien');
            $table->integer('thoiluong');
            $table->date('ngaykhoichieu');
            $table->enum('trangthai',array('0','1'));
            $table->text('trailer');
            $table->text('noidung');
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
        Schema::dropIfExists('phim');
    }
}
