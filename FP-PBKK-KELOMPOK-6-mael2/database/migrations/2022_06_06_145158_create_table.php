<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('transaksi');
        Schema::dropIfExists('studio');
        Schema::dropIfExists('jadwal');
        Schema::dropIfExists('karyawan');
        Schema::dropIfExists('user');

        Schema::create('karyawan', function (Blueprint $table) {
            $table->increments('kode_karyawan');
            $table->string('nama',50);
            $table->string('email',100);
            $table->string('password');
        });

        Schema::create('user', function (Blueprint $table) {
            $table->increments('kode_user');
            $table->string('nama',50);
            $table->string('telepon',12);
        });

        Schema::create('jadwal', function (Blueprint $table) {
            $table->string('kode_jadwal',5);
            $table->string('jam',15);
            $table->integer('harga')->length(20)->unsigned();
            $table->primary('kode_jadwal');
        });

        Schema::create('studio', function (Blueprint $table) {
            $table->string('kode_studio',5);
            $table->string('nama',50);
            $table->string('lokasi',20);
            $table->decimal('lat', 10, 6);
            $table->decimal('lng', 10, 6);
            $table->string('kode_jadwal',5);
            $table->primary('kode_studio');
        });

        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('kode_transaksi')->nullable();
            $table->integer('kode_karyawan')->unsigned()->nullable();
            $table->integer('kode_user')->unsigned();
            $table->string('kode_studio',5);
            $table->string('kode_jadwal',5);
            $table->integer('diskon')->length(20)->unsigned();
            $table->date('tanggal',30);
        });

        Schema::table('studio', function (Blueprint $table) {
            $table->foreign('kode_jadwal')->references('kode_jadwal')->on('jadwal');
        });

        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign('kode_karyawan')->references('kode_karyawan')->on('karyawan');
            $table->foreign('kode_studio')->references('kode_studio')->on('studio');
            $table->foreign('kode_user')->references('kode_user')->on('user');
            $table->foreign('kode_jadwal')->references('kode_jadwal')->on('jadwal');
        });
    }

    public function down()
    {
        Schema::dropIfExists('table');
    }
}
