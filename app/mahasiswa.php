<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table='mahasiswa';
    protected $fillable= array('nama','nis','dosen_id','jurusan_id');

    public function dosen()
    {
    	return $this->belongsTo('App\dosen', 'dosen_id');
    }

    public function jurusan()
    {
    	return $this->belongsTo('App\jurusan', 'jurusan_id');
    }
}
