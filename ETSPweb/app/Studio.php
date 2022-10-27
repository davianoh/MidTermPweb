<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaksi;
use App\Jadwal;

class Studio extends Model
{
    protected $table = "studio";
    protected $primaryKey = "kode_studio";
    public $timestamps = false;
    public $incrementing = false;

    function transaksi() {
        return $this->hasMany(Transaksi::class);
    }

    function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }
}
