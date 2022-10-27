<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTable extends Migration
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
             $table->string('nama');
             $table->string('password');
         });

         Schema::create('user', function (Blueprint $table) {
             $table->increments('kode_user');
            //  $table->bigIncrements('id');
             $table->string('name');
             $table->string('username')->unique()->nullable();
             $table->string('email')->unique();
             $table->timestamp('email_verified_at')->nullable();
             $table->string('password');
             $table->rememberToken();
             $table->timestamps();
         });

         Schema::create('jadwal', function (Blueprint $table) {
             $table->string('kode_jadwal');
             $table->string('jam');
             $table->integer('harga')->length(20)->unsigned();
             $table->primary('kode_jadwal');
         });
        
         Schema::create('studio', function (Blueprint $table) {
             $table->string('kode_studio');
             $table->string('nama');
             $table->string('lokasi');
             $table->decimal('lat', 10, 6);
             $table->decimal('lng', 10, 6);
             $table->string('kode_jadwal_studio');
             $table->primary('kode_studio');
         });

         Schema::create('transaksi', function (Blueprint $table) {
             $table->string('kode_transaksi');
             $table->string('kode_karyawan_transaksi');
             $table->string('kode_user_transaksi');
             $table->string('kode_studio_transaksi');
             $table->string('kode_jadwal_transaksi');
             $table->integer('diskon')->length(20)->unsigned();
             $table->date('tanggal',30);
             $table->primary('kode_transaksi');
         });

         Schema::table('studio', function (Blueprint $table) {
             $table->foreign('kode_jadwal_studio')->references('kode_jadwal')->on('jadwal');
         });

        //  Schema::table('transaksi', function (Blueprint $table) {
        //      $table->foreign('kode_karyawan_transaksi')->references('kode_karyawan')->on('karyawan');
        //      $table->foreign('kode_studio_transaksi')->references('kode_studio')->on('studio');
        //      $table->foreign('kode_user_transaksi')->references('kode_user')->on('user');
        //      $table->foreign('kode_jadwal_transaksi')->references('kode_jadwal')->on('jadwal');
        //  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
