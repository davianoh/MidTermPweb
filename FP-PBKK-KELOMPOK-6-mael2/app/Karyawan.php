<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Transaksi;

class Karyawan extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "karyawan";
    protected $primaryKey = "kode_karyawan";
    public $timestamps = false;
    protected $fillable = [
        'kode_karyawan', 'nama', 'email','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function transaksi() {
        return $this->hasMany(Transaksi::class,'kode_karyawan');
    }

}