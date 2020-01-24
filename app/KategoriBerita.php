<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    //
    protected $table='kategori_berita';

    protected $filable=[
        'nama', 'users_id'
    ];

    public function berita(){
        return $this->hasMany(\App\Berita::class, 'kategori_berita_id','id');
    }

    public function user(){
        return $this->belongTo(\App\User::class,'users_id','id');
    }
}
