<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    //
    protected $table='kategori_galeri';

    protected $filable=[
        'nama', 'users_id'
    ];

    public function galeri(){
        return $this->hasMany(\App\Galeri::class, 'kategori_galeri_id','id');
    }

    public function user(){
        return $this->belongTo(\App\User::class,'users_id','id');
    }
}
