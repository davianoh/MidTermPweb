<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Transaksi;

class User extends Model
{
    protected $table = "user";
    // protected $fillable = ['kode_user', 'nama', 'telepon'];
    protected $guarded = ['id'];
    protected $primaryKey = 'kode_user';
    public $timestamps = false;

    function transaksi() {
        return $this->hasMany(Transaksi::class);
    }

}
