<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Jadwal;
use App\Studio;
use App\Karyawan;


class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $fillable = ['kode_transaksi','kode_karyawan','kode_user','kode_studio','kode_jadwal','diskon','tanggal'];
    protected $primaryKey = 'kode_transaksi';
    public $timestamps = false;


    function user() {
        return $this->belongsTo(User::class,'kode_user');
    }

    function karyawan() {
        return $this->belongsTo(Karyawan::class,'kode_karyawan');
    }

    function jadwal(){
        return $this->belongsTo(Jadwal::class,'kode_jadwal');
    }

    function lapangan(){
        return $this->belongsTo(Studio::class,'kode_studio');
    }

}
