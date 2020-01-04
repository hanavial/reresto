<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['id_user','bayar'];

    public function pesanan(){
        return $this->hasOne('App\Pesanan','id','id_pesanan');
    }
}
