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
    protected $fillable = [
        'kode_transaksi',
        'kode_karyawan_transaksi',
        'kode_user_transaksi',
        'kode_studio_transaksi',
        'kode_jadwal_transaksi',
        'diskon',
        'tanggal'];
    protected $primaryKey = 'kode_transaksi';
    public $timestamps = false;


    function user() {
        return $this->belongsTo(User::class);
    }

    function studio() {
        return $this->belongsTo(Karyawan::class);
    }

    function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }

    function lapangan(){
        return $this->belongsTo(Studio::class);
    }
}
